<?php

include("header.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Requests</title>
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
            width: 90%;
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

    <h1>Students Requests</h1>
    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Roll no</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `student` WHERE `approval` = 'Pending'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["dept"] . "</td>
                            <td>" . $row["branch"] . "</td>
                            <td>" . $row["year"] . "</td>
                            <td>" . $row["rollno"] . "</td>
                            <td>" . $row["password"] . "</td>
                            <td>"

                    . '<a class="delete" href="student-approve.php?name=' . $row["name"] . '">Approve</a> '
                    . "</td>;
                        </tr>";
            }


            ?>
        </tbody>
    </table>
</body>

</html>