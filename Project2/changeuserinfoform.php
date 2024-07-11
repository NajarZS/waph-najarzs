<?php

require "session_auth.php";



$rand = bin2hex(openssl_random_pseudo_bytes(16));

$_SESSION["nocsrftoken"] = $rand;

?>



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Change User Information</title>

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

    h1 {

      color: #333;

    }

    .form {

      display: flex;

      flex-direction: column;

    }

    .text_field {

      margin-bottom: 15px;

      padding: 8px;

      border: 1px solid #ccc;

      border-radius: 4px;

    }

    .button {

      padding: 10px;

      background-color: #5cb85c;

      color: white;

      border: none;

      border-radius: 4px;

      cursor: pointer;

      transition: background-color 0.3s ease;

    }

    .button:hover {

      background-color: #4cae4c;

    }

  </style>

  <script>

    function validateForm() {

      let newPassword = document.forms["changeuserinfoForm"]["newpassword"].value;

      let reNewPassword = document.forms["changeuserinfoForm"]["renewpassword"].value;



      if (newPassword !== reNewPassword) {

        alert("Passwords do not match");

        return false;

      }

      return true;

    }

  </script>

</head>

<body>

  <div class="container">

    <h1>Change User Information</h1>

    <form name="changeuserinfoForm" action="changeuserinfo.php" method="POST" class="form" onsubmit="return validateForm()">

      <label for="username">New Username:</label>

      <input type="text" id="username" class="text_field" name="username">



      <label for="email">New Email:</label>

      <input type="email" id="email" class="text_field" name="email" pattern="^[\w.-]+@[\w-]+(\.[\w-]+)*$" title="Please enter a valid email">



      <label for="phone">New Phone Number:</label>

      <input type="text" id="phone" class="text_field" name="phone" pattern="^\d{10}$" title="Phone number must be 10 digits">



      <label for="newpassword">New Password:</label>

      <input type="password" id="newpassword" class="text_field" name="newpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$" title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1 lowercase, and 1 UPPERCASE">



      <label for="renewpassword">Re-enter New Password:</label>

      <input type="password" id="renewpassword" class="text_field" name="renewpassword">



      <input type="hidden" name="nocsrftoken" value="<?php echo $rand; ?>"/>

      <button class="button" type="submit">Update Information</button>

    </form>

    <a href="index.php">Home</a> | <a href="logout.php">Logout</a>

  </div>

</body>

</html>

