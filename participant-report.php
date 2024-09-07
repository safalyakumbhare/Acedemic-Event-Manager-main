<?php

include("header.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants Report</title>
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
            color: red;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php

    // Display a dropdown with activities
    
    $current_date = date("Y-m-d");

    // Display a dropdown with activities
    $sql = "SELECT name FROM activity WHERE `datefrom` >= '$current_date' AND approval = 'Approved by HOD'";
    echo "<select name='activity' required>";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
        echo "<option value=''>No Events</option>";
    } else {
        echo "<option value=''>Select the events</option>";
    }
    foreach ($conn->query($sql) as $row) {
        echo "<option value='{$row['name']}'>{$row['name']}</option>";
    }
    echo "</select>";
    ?>
    <center><input type="submit" value="Show" id="submit" name="show" /></center>


    ?>
    <h1>Students Report</h1>
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
            $sql = "SELECT * FROM `student` WHERE `approval` = 'Approved'";

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

                    . '<a class="delete" href="student-remove.php?name=' . $row["name"] . '">Remove</a> '
                    . "</td>";



            }


            ?>
        </tbody>
    </table>
</body>

</html>