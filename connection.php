<?php

$conn = mysqli_connect("localhost", "root", "", "testing");
if ($conn) {
    // echo '<script>alert("Database Connected")</script>';
} else {
    echo "error";
}

?>