<?php
// include("header.php")

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <link rel="stylesheet" href="New.css">
</head>

<body>
  <div class="container">
    <h1 class="title">Student Registration</h1>
    <form class="registration-form" action="Add-Student.php" method="POST">
      <label for="hodName">Name of Student:</label>
      <input type="text" id="Name" name="Name" required>

      <label for="email">Email : </label>
      <input type="text" id="email" name="email" required>

      <label for="department">Department:</label>
      <input type="text" id="department" name="department" required>

      <label for="userId">Student ID:</label>
      <input type="text" id="userId" name="userId" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" name="send" value="Register">
      <button type="button" class="cancel-button" name="cancel">Cancel</button>
    </form>
  </div>
</body>

</html>