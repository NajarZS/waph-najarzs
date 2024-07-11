<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);



$lifetime = 15 * 60;

$path = "/";

$domain = "localhost";

$secure = TRUE;

$httponly = TRUE;



session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);

session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = sanitize_input(trim($_POST["username"]));

    $password = sanitize_input(trim($_POST["password"]));

    $repassword = sanitize_input(trim($_POST["repassword"]));

    $email = sanitize_input(trim($_POST["email"]));

    $phone = sanitize_input(trim($_POST["phone"]));



    if (empty($username) || empty($password) || empty($email) || empty($phone) || empty($repassword)) {

        echo "<script>alert('All fields are required');window.location='registrationform.php';</script>";

        die();

    }



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "<script>alert('Invalid email format');window.location='registrationform.php';</script>";

        die();

    }



    if (!preg_match("/^\d{10}$/", $phone)) {

        echo "<script>alert('Phone number must be 10 digits');window.location='registrationform.php';</script>";

        die();

    }



    if ($password !== $repassword) {

        echo "<script>alert('Passwords do not match');window.location='registrationform.php';</script>";

        die();

    }



    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$/", $password)) {

        echo "<script>alert('Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1 lowercase, and 1 UPPERCASE');window.location='registrationform.php';</script>";

        die();

    }



    if (addnewuser($username, $password, $email, $phone)) {

        echo "<script>alert('Registration succeeded, you can now login to the system');window.location='form.php';</script>";

    } else {

        echo "<script>alert('Registration failed, please try again');window.location='registrationform.php';</script>";

    }

}



function addnewuser($username, $password, $email, $phone) {

    $mysqli = new mysqli('localhost', 'Zaid', 'zaid123', 'Proj2db');



    if ($mysqli->connect_errno) {

        exit();

    }



    $stmt = $mysqli->prepare("INSERT INTO users (username, password, email, phone) VALUES (?, MD5(?), ?, ?)");

    $stmt->bind_param('ssss', $username, $password, $email, $phone);



    if ($stmt->execute()) {

        $stmt->close();

        $mysqli->close();

        return TRUE;

    } else {

        $stmt->close();

        $mysqli->close();

        return FALSE;

    }

}



function sanitize_input($input) {

    $input = trim($input);

    $input = stripslashes($input);

    $input = htmlspecialchars($input);

    return $input;

}

?>

