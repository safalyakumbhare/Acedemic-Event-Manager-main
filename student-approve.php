<?php
    include("connection.php");

    $name = $_GET['name'];

    $sql = "UPDATE `student` SET `approval` = 'Approved' WHERE `name` = '$name'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert ('$name Approved for login');
        window.location.href='student-request.php' </script>";
    }
    else{
        echo "<script>alert('Error to approve')</script>";
    }

?>