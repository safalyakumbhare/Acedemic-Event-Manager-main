<?php

include("connection.php");

$name = $_POST['Name'];
$email = $_POST['email'];
$dep = $_POST['department'];
$year = $_POST['year'];
$phone = $_POST['phone'];
$event = $_POST['activity'];


$sql = "INSERT INTO `participants` VALUES ('$name','$email','$dep','$year','$phone','$event')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('Data Inserted Successfully')</script>";
}
else{
    echo "<script>alert('Data Not Inserted')</script>";
}



?>