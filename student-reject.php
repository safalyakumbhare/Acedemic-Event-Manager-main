<?php
    include("connection.php");

    $name = $_GET['name'];

    $sql = "UPDATE `student` SET `approval` = 'Rejected' WHERE `name` = '$name'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert ('$name Rejected for login');
        window.location.href='student-request.php' </script>";
    }
    else{
        echo "<script>alert('Error to Reject')</script>";
    }

?>