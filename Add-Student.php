<?php

include("connection.php");

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $roll = $_POST['roll'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpassword'];



    if ($password !== $confirmpass) {
        echo "<script>alert('Password does not match');
            window.location.href='student-registration.php';</script>";
    } else {
        $sql = "INSERT INTO `student` VALUES ('$name','$email','$phone','$department','$branch','$year','$roll','$password','Pending')";

        $result = mysqli_query($conn, $sql);

        if ($result == 1) {
            echo "<script>alert('Your Registration Request has been sent. Please login after 24 hours');
            window.location.href='student-loginpage.php';</script>";
        } else {
            echo "<script>alert('Registration failed');
                window.location.href='student-registration.php';</script>";
        }
    }
}

?>