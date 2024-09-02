<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $role = $_POST["role"];
    switch ($role) {
        case "Principal":
            $desig = "Principal";

            break;
        case "HOD":
            $desig = "HOD";

            break;
        case "Faculty":
            $desig = "Faculty";

            break;

        default:
            break;
    }
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $_SESSION['name'] = $username;


    $sql = "SELECT * FROM login WHERE desig = '$desig' AND username = '$username' AND password='$password';";
    $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        switch ($role) {
            case 'Principal':
                header("Location: HomeAdmin.php");
                break;
            case 'HOD':
                header("Location: HomeHOD.php");
                break;
            case 'Faculty':
                header("Location: HomeFaculty.php");
                break;

        }
    } else {
        echo '<script>alert("Invalid Username or Password")</script>';
        include("loginpage.php");
    }
}



if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $_SESSION['name'] = $name;

    $sql = "SELECT * FROM `student` WHERE `approval` = 'Approved' AND `name` = '$name' AND `password` = '$pass' ";

    $result = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location: Home-Student.php");
    } else {
        echo '<script>alert("Incorrect Student Name or Password")</script>';
        include("student-loginpage.php");
    }

}

?>