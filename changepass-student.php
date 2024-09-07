<?php
include("connection.php");
include("login.php");

$studname = $_SESSION['name'];
if (isset($_POST['change'])) {
    $stud = $studname;
    $currentpass = $_POST['currentpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['confirmpass'];

    if ($newpass !== $confirmpass) {
        echo "<script>alert('New Password and Confirm Password do not match');
        window.location.href='student-change-pass.php';</script>";
    } else {

        $sql = "SELECT * FROM `student` WHERE `name`='$stud' AND `password`='$currentpass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            // Update password
            $update_sql = "UPDATE `student` SET `password`='$newpass' WHERE `name`='$stud'";
            $update_result = mysqli_query($conn, $update_sql);

            if ($update_result) {
                echo "<script>alert('Password Changed Successfully');
                window.location.href='student-loginpage.php'</script>";
            } else {
                echo "<script>alert('Password Change Failed');
                    window.location.href='student-change-pass.php';</script>";
            }
        } else {
            echo "<script>alert('Current Password is Incorrect');
                window.location.href='student-change-pass.php';</script>";
        }
    }

}


?>