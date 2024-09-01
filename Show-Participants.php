<?php

include("header.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Participants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: aliceblue;
        }

        h1 {
            text-align: center;
            margin-top: 5vh;
        }

        table {
            width: 80%;
            /* border-collapse: ; */
            margin: 20px auto;
            background-color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            margin: 20px auto;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete {
            color: blue;
        }
    </style>
</head>

<body>

    <h1>Partcipants List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Year</th>
                <th>Phone</th>
                <th>Event</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `participants`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["dept"] . "</td>
                <td>" . $row["Year"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["eventname"] . "</td>
                
            </tr>";
            } ?>
        </tbody>
    </table>
</body>

</html>