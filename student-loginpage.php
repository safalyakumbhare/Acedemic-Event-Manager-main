<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="student-loginpage.css">
</head>
<style>

</style>

<body>
    <div class="main">
        <div class="login-container">
            <!-- <h2>Event Manager</h2> -->
            <form id="login-form" action="student-login.php" name="form" method="POST">
                <div class="form-group">
                    <label for="user">Student ID : </label>
                    <input type="text" id="user" name="name" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <div class="password-container">
                        <input type="password" id="pass" name="pass" required>
                        <span id="togglePassword" class="icon-eye">&#128065;</span>
                        <!-- Unicode character for eye icon -->
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn login" id="btn" name="submit">Login</button>
                    <button type="reset" class="btn reset" name="reset" id="btn">Reset</button>
                </div>
                <div class="form-group">
                    Not Registered yet?<a href="student-registration.php">Register Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>