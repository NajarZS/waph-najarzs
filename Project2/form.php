<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <title>WAPH-Login page</title>

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

    h1, h2 {

      color: #333;

    }

    .digit-clock {

      margin: 10px 0;

      color: #555;

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

  <script type="text/javascript">

      function displayTime() {

        document.getElementById('digit-clock').innerHTML = "Current time: " + new Date();

      }

      setInterval(displayTime, 500);

  </script>

</head>

<body>

  <div class="container">

    <h1>A Simple login form, WAPH</h1>

    <h2>Student Name</h2>

    <div id="digit-clock" class="digit-clock"></div>

    <?php echo "Visited time: " . date("Y-m-d h:i:sa") ?>

    <form action="index.php" method="POST" class="form login">

      <label for="username">Username:</label>

      <input type="text" id="username" class="text_field" name="username" required>

      <label for="password">Password:</label>

      <input type="password" id="password" class="text_field" name="password" required>

      <button class="button" type="submit">Login</button>

    </form>

  </div>

</body>

</html>

