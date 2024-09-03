<?php
include("connection.php");


$name=$_GET['name'];

$sql="delete from `student` where name='$name';";

if($conn->multi_query($sql) === True)
{
    echo"<script>
    alert('$name Removed Successfully');
    window.location.href='student-report.php';
            </script>";
}
else{
    echo "<script>alert('Error deleting record')</script>";
}
$conn->close();

?>