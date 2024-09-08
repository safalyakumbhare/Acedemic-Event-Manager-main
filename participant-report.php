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

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: lightgreen;
            height: 30px;
            width: 150px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            transition: all ease .5s;
        }

        input[type="submit"]:hover {
            background-color: white;
            box-shadow: 1px 1px 20px 10px lightgreen;

        }

        thead>th{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="activity">Select Event Name:</label>
                <?php
                // Display a dropdown with activities
                $current_date = date('Y-m-d');
                $sql = "SELECT name FROM activity WHERE `datefrom` >= '$current_date'";
                echo "<select name='activity' required>";
                echo "<option value=''>Select</option>";
                foreach ($conn->query($sql) as $row) {
                    echo "<option value='{$row['name']}'>{$row['name']}</option>";
                }
                echo "</select>";
                ?>
                <center><input type="submit" value="Show" id="submit" name="show" /></center>
            </div>
        </form>
    </div>


    <h1>Participants Report</h1>
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Student Name</th>
                <th>Roll no</th>
                <th>Department</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Email </th>
                <th>Phone No.</th>
            </tr>
        </thead>
        <tbody>
            <?php


            $event = $_POST['activity'];
            $sql = "SELECT * FROM `participants` WHERE `eventname` = '$event'";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td>" . $row["eventname"] . "</td>
                            <td>" . $row["studname"] . "</td>
                            <td>" . $row["studrollno"] . "</td>
                            <td>" . $row["studdept"] . "</td>
                            <td>" . $row["studbranch"] . "</td>
                            <td>" . $row["studyear"] . "</td>
                            <td>" . $row["studemail"] . "</td>
                            <td>" . $row["studphone"] . "</td>
                            </tr>" ;


            }


            ?>
        </tbody>
    </table>
</body>

</html>