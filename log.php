<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<?php include('partials\header.php') ?>
<h2>Login</h2>

<form action="assets/login.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <button type="submit">Login</button>
</form>
<?php include('partials\footer.php') ?>
</body>
</html>