<?php

require "session_auth.php";



$username = $_SESSION['username'] ?? null;

$newUsername = sanitize_input(trim($_REQUEST['username'] ?? null));

$newEmail = sanitize_input(trim($_REQUEST['email'] ?? null));

$newPhone = sanitize_input(trim($_REQUEST['phone'] ?? null));

$newPassword = sanitize_input(trim($_REQUEST['newpassword'] ?? null));

$token = $_REQUEST['nocsrftoken'] ?? null;



if (!isset($token) || $token !== $_SESSION["nocsrftoken"]) {

    echo "CSRF Attack is detected";

    die();

}



if ($username) {

    $mysqli = new mysqli('localhost', 'Zaid', 'zaid123', 'Proj2db');



    if ($mysqli->connect_errno) {

        printf("Database connection failed: %s\n", $mysqli->connect_error);

        exit();

    }



    $stmt = $mysqli->prepare("SELECT username, email, phone FROM users WHERE username=?");

    $stmt->bind_param("s", $username);

    $stmt->execute();

    $stmt->bind_result($currentUsername, $currentEmail, $currentPhone);

    $stmt->fetch();

    $stmt->close();



    $updateSuccess = false;



    if ($newUsername && $newUsername !== $currentUsername) {

        $stmt = $mysqli->prepare("UPDATE users SET username=? WHERE username=?");

        $stmt->bind_param("ss", $newUsername, $currentUsername);

        if ($stmt->execute()) {

            $_SESSION['username'] = $newUsername;

            $username = $newUsername;

            echo "Username updated successfully.<br>";

            $updateSuccess = true;

        } else {

            echo "Failed to update username.<br>";

        }

        $stmt->close();

    }



    if ($newEmail && $newEmail !== $currentEmail) {

        $stmt = $mysqli->prepare("UPDATE users SET email=? WHERE username=?");

        $stmt->bind_param("ss", $newEmail, $username);

        if ($stmt->execute()) {

            echo "Email updated successfully.<br>";

            $updateSuccess = true;

        } else {

            echo "Failed to update email.<br>";

        }

        $stmt->close();

    }



    if ($newPhone && $newPhone !== $currentPhone) {

        $stmt = $mysqli->prepare("UPDATE users SET phone=? WHERE username=?");

        $stmt->bind_param("ss", $newPhone, $username);

        if ($stmt->execute()) {

            echo "Phone number updated successfully.<br>";

            $updateSuccess = true;

        } else {

            echo "Failed to update phone number.<br>";

        }

        $stmt->close();

    }



    if ($newPassword) {

        $stmt = $mysqli->prepare("UPDATE users SET password=MD5(?) WHERE username=?");

        $stmt->bind_param("ss", $newPassword, $username);

        if ($stmt->execute()) {

            echo "Password updated successfully.<br>";

            $updateSuccess = true;

        } else {

            echo "Failed to update password.<br>";

        }

        $stmt->close();

    }



    if (!$updateSuccess) {

        echo "No changes were made.";

    }



    $mysqli->close();

} else {

    echo "No valid user session found.";

    exit();

}

?>

<br>

<a href="index.php">Home</a> | <a href="logout.php">Logout</a>

