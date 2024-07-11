<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <title>WAPH Registration Form</title>

  <style>

    body {

      font-family: Arial, sans-serif;

      margin: 0;

      padding: 0;

      display: flex;

      justify-content: center;

      align-items: center;

      height: 100vh;

      background-color: #f4f4f4;

    }

    .container {

      background-color: white;

      padding: 20px;

      border-radius: 8px;

      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }

    h1 {

      text-align: center;

    }

    form {

      display: flex;

      flex-direction: column;

    }

    label {

      margin-bottom: 5px;

    }

    input {

      margin-bottom: 15px;

      padding: 8px;

      border: 1px solid #ccc;

      border-radius: 4px;

    }

    button {

      padding: 10px;

      background-color: #5cb85c;

      color: white;

      border: none;

      border-radius: 4px;

      cursor: pointer;

    }

    button:hover {

      background-color: #4cae4c;

    }

  </style>

</head>

<body>

  <div class="container">

    <h1>Register</h1>

    <form name="registrationForm" action="addnewuser.php" method="POST" onsubmit="return validateForm()">

      <label for="username">Username:</label>

      <input type="text" id="username" name="username" required>



      <label for="password">Password:</label>

      <input type="password" id="password" name="password" required

        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&])[\w!@#$%^&]{8,}$"

        title="Password must have at least 8 characters with 1 special symbol !@#$%^& 1 number, 1 lowercase, and 1 UPPERCASE"

        onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : ''); form.repassword.pattern = this.value;"/>



      <label for="repassword">Retype Password:</label>

      <input type="password" id="repassword" name="repassword" required

        title="Password does not match"

        onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"/>



      <label for="email">Email:</label>

      <input type="email" id="email" name="email" required

        pattern="^[\w.-]+@[\w-]+(\.[\w-]+)*$"

        title="Please enter a valid email"

        onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"/>



      <label for="phone">Phone Number:</label>

      <input type="text" id="phone" name="phone" required

        pattern="^\d{10}$"

        title="Phone number must be 10 digits"

        onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"/>



      <button type="submit">Register</button>

    </form>

  </div>

</body>

</html>

