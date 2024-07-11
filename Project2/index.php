<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);



$lifetime = 15 * 60;

$path = "/";

$domain = "192.168.200.128"; 

$secure = TRUE;

$httponly = TRUE;



session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);

session_start();



if (isset($_POST["username"]) and isset($_POST["password"])) {

    if (checklogin_mysql($_POST["username"], $_POST["password"])) {

        $_SESSION["authenticated"] = TRUE;

        $_SESSION["username"] = $_POST["username"];

        $_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"];

        header("Location: index.php");

        exit();

    } else {

        session_destroy();

        echo "<script>alert('Invalid username/password');window.location='form.php';</script>";

        die();

    }

}



if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== TRUE) {

    session_destroy();

    echo "<script>alert('You have not logged in. Please login first');</script>";

    header("Refresh:0; url=form.php");

    die();

}



if ($_SESSION["browser"] !== $_SERVER["HTTP_USER_AGENT"]) {

    session_destroy();

    echo "<script>alert('Session hijacking is detected!');</script>";

    header("Refresh:0; url=form.php");

    die();

}



function checklogin_mysql($username, $password) {

    $mysqli = new mysqli('localhost', 'Zaid', 'zaid123', 'Proj2db');



    if ($mysqli->connect_errno) {

        printf("Database connection failed: %s\n", $mysqli->connect_error);

        exit();

    }



    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=? AND password=MD5(?)");

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $stmt->store_result();



    if ($stmt->num_rows == 1) {

        $stmt->close();

        $mysqli->close();

        return TRUE;

    }



    $stmt->close();

    $mysqli->close();

    return FALSE;

}



function getUserInfo($username) {

    $mysqli = new mysqli('localhost', 'Zaid', 'zaid123', 'Proj2db');



    if ($mysqli->connect_errno) {

        printf("Database connection failed: %s\n", $mysqli->connect_error);

        exit();

    }



    $stmt = $mysqli->prepare("SELECT username, email, phone FROM users WHERE username=?");

    if (!$stmt) {

        printf("Prepared Statement Error: %s\n", $mysqli->error);

        exit();

    }



    $stmt->bind_param("s", $username);

    if (!$stmt->execute()) {

        printf("Execution Error: %s\n", $stmt->error);

        exit();

    }



    $stmt->bind_result($username, $email, $phone);

    if (!$stmt->fetch()) {

        printf("Fetch Error: %s\n", $stmt->error);

        exit();

    }



    $stmt->close();

    $mysqli->close();



    return array('username' => $username, 'email' => $email, 'phone' => $phone);

}



if (isset($_SESSION["username"])) {

    $userInfo = getUserInfo($_SESSION["username"]);

}

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Welcome</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background-color: #f4f4f4;

            margin: 0;

            padding: 0;

            display: flex;

            justify-content: center;

            align-items: center;

            height: 100vh;

        }

        .container {

            background-color: white;

            padding: 20px;

            border-radius: 8px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            max-width: 400px;

            text-align: center;

        }

        h2 {

            color: #333;

        }

        p {

            color: #555;

            margin: 10px 0;

        }

        .link {

            display: inline-block;

            margin-top: 20px;

            padding: 10px 20px;

            background-color: #5cb85c;

            color: white;

            text-decoration: none;

            border-radius: 4px;

            transition: background-color 0.3s ease;

        }

        .link:hover {

            background-color: #4cae4c;

        }

    </style>

</head>

<body>

    <div class="container">

        <h2>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</h2>

        <?php if (isset($userInfo)): ?>

            <p>Username: <?php echo htmlentities($userInfo['username']); ?></p>

            <p>Email: <?php echo htmlentities($userInfo['email']); ?></p>

            <p>Phone: <?php echo htmlentities($userInfo['phone']); ?></p>

        <?php endif; ?>

        <a class="link" href="changeuserinfoform.php">Change User Info</a>

        <a class="link" href="logout.php">Logout</a>

    </div>

</body>

</html>

