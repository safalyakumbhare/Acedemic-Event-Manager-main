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

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `approval` FROM `student` WHERE `name` = ? AND `password` = ?");
    $stmt->bind_param("ss", $name, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists and fetch the approval status
    if ($row = $result->fetch_assoc()) {
        $approval = $row['approval'];

        if ($approval == "Pending") {
            echo '<script>alert("Your account is pending for approval");
        window.location.href="student-loginpage.php";</script>';
        } elseif ($approval == "Rejected") {
            echo '<script>alert("Your account has been rejected for approval to login");
        window.location.href="student-loginpage.php";</script>';
        } elseif ($approval == "Approved") {
            // Successful login, redirect to Home-Student.php
            header("Location: Home-Student.php");
            exit(); // Ensure no further code is executed after redirection
        }
    } else {
        // No matching student found, incorrect name or password
        echo '<script>alert("Incorrect Student Name or Password");
    window.location.href="student-loginpage.php";</script>';
    }

    // Close the prepared statement
    $stmt->close();


}
?>