<?php
include("connection.php");
include("login.php");

$user = $_SESSION['name'];
$eventname = $_GET['event'];

// Fetch student data from database
$studdata = "SELECT * FROM `student` WHERE `name` = '$user'";
$result = mysqli_query($conn, $studdata);
$stud = mysqli_fetch_assoc($result);

$studname = $stud['name'];
$studroll = $stud['rollno'];
$studdept = $stud['dept'];
$studbranch = $stud['branch'];
$studyear = $stud['year'];
$studemail = $stud['email'];
$studphone = $stud['phone'];

// Check if student has already participated in the event
$check = "SELECT * FROM `participants` WHERE `studname` = '$studname' AND `eventname` = '$eventname'";
$check_result = mysqli_query($conn, $check);

if (mysqli_num_rows($check_result) > 0) {
    // Student already participated
    echo "<script>alert('You have already participated in this event.'); window.location.href='Home-Student.php';</script>";
} else {
    // Insert new participation entry
    $sql = "INSERT INTO `participants` 
            VALUES ('$eventname', '$studname', '$studroll', '$studdept', '$studbranch', '$studyear', '$studemail', '$studphone', 'participated')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('You have successfully registered for the event $eventname.');
        window.location.href='Home-Student.php';</script>";
    } else {
        echo "<script>alert('Error in registration.');
        window.location.href='Home-Student.php';</script>";
    }
}
?>
