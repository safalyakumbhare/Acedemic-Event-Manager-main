<?php
include("connection.php");
$sql = "SELECT * FROM `login`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                <td>" . $row["desig"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["dept"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["password"] . "</td>
                <td>"

        . '<a class="delete" href="deleteEvent.php?username=' . $row['username'] . '">Remove</a> '
        . "</td>;
            </tr>";
}
?>