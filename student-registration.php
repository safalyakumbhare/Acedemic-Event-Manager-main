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
      <label for="studName">Name of Student :</label>
      <input type="text" id="Name" name="name" required>

      <label for="email">Email : </label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone : </label>
      <input type="number" id="phone" name="phone" required>

      <label for="department">Department :</label>
      <input type="text" id="department" name="department" required>

      <label for="branch">Branch :</label>
      <input type="text" id="branch" name="branch" required>

      <label for="department">Year :</label>
      <select name="year" id="year">
        <option value="" selected>Select your year</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4rt">4rt</option>
      </select>

      <label for="roll">Roll no :</label>
      <input type="text" id="roll" name="roll" required>
  
      <label for="password">Password :</label>
      <input type="password" id="password" name="password" required>

      <label for="confirmpassword">Confirm Password :</label>
      <input type="password" id="confirmpassword" name="confirmpassword" required>

      <input type="submit" name="register" value="Register">
      <button type="button" class="cancel-button" name="cancel">Cancel</button>
    </form>
  </div>
</body>

</html>