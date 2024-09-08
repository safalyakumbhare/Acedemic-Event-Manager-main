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
  <style>
    .password-container {
      position: relative;
      width: fit-content;
    }

    .icon-eye {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 20px;
    }

    input[type="password"],
    input[type="text"] {
      padding-right: 30px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Change Password</h1>
    <form action="Change.php" method="POST" class="registration-form">
      
      <label for="crntpass">Current Password : </label>
      <div class="password-container">
        <input type="password" id="crntpass" name="oldpass" required>
        <span id="toggleCrntPass" class="icon-eye">&#128065;</span>
      </div>

      <label for="newpass">New Password: </label>
      <div class="password-container">
        <input type="password" id="newpass" name="newpass" required />
        <span id="toggleNewPass" class="icon-eye">&#128065;</span>
      </div>

      <label for="conpass">Confirm Password: </label>
      <div class="password-container">
        <input type="password" id="conpass" name="conpass" required>
        <span id="toggleConPass" class="icon-eye">&#128065;</span>
      </div>
      
      <input type="submit" name="change" value="Change Password">
    </form>
  </div>

  <script>
    // Function to toggle password visibility
    function togglePassword(inputFieldId, toggleIconId) {
      const inputField = document.getElementById(inputFieldId);
      const toggleIcon = document.getElementById(toggleIconId);
      
      toggleIcon.addEventListener('click', () => {
        if (inputField.type === "password") {
          inputField.type = "text";
        } else {
          inputField.type = "password";
        }
      });
    }

    // Apply the function to all password fields
    togglePassword('crntpass', 'toggleCrntPass');
    togglePassword('newpass', 'toggleNewPass');
    togglePassword('conpass', 'toggleConPass');
  </script>
</body>

</html>
