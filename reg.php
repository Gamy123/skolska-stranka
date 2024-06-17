<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>registrer Form</title>
</head>
<body>
<?php include('partials\header.php') ?>
<h2>registrer Form</h2>

<form action="assets/registration.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <button type="submit">Submit</button>
</form>

<?php include('partials\footer.php') ?>

</body>
</html>
