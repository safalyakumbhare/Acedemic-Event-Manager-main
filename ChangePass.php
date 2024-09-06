<?php
require_once("connection.php");
include("header.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <link rel="stylesheet" href="New.css">
</head>

<body>
  <div class="container">
    <h1>Change Password</h1>
    <form action="Change.php" method="POST" class="registration-form">
      <label for="crntpass">Current Password : </label>
      <input type="password" id="crntpass" name="oldpass" required>
      <span id="togglePassword" class="icon-eye">&#128065;</span>
      <label for="newpass">New Password: </label>
      <input type="password" id="newpass" name="newpass" required />
      <span id="togglePassword" class="icon-eye">&#128065;</span>
      <label for="conpass">Confirm Password: </label>
      <input type="password" id="conpass" name="conpass" required>
      <span id="togglePassword" class="icon-eye">&#128065;</span>
      <input type="submit" name="change" value="Change Password">
    </form>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#pass');
    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      togglePassword.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
    });
  </script>
</body>

</html>