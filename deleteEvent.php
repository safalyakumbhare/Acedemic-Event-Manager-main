<?php
include("connection.php");


$username=$_GET['username'];

$sql="delete from login where username='$username';";

if($conn->multi_query($sql) === True)
{
    echo"<script>
    alert('Removed Successfully');
    window.location.href='staffreport.php';
            </script>";
}
else{
    echo "<script>alert('Error deleting record')</script>";
}
$conn->close();

?>