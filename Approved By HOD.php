<?php

include ("header.php");

include ("connection.php");
$current_date = date('Y-m-d');
$sql = "SELECT * FROM `activity` WHERE `approval`='Approved by HOD' AND`datefrom` >= '$current_date' ORDER BY `datefrom`";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Approved By Principal</title>
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
            width: 100%;
            border-collapse: collapse;
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
    </style>
</head>

<body>

   <center> <h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            echo 'Events Approved By HOD';
        } else {
            echo 'No Events Approved !';
        }
        ?>
    </h1></center>
        <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Place</th>
                <th>Event Start Time</th>
                <th>Event End Time</th>
                <th>Department</th>
                <th>Last Date of Participation</th>
                <th>Approval Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["description"] . "</td>
                <td>" . date("d-m-y", strtotime($row["datefrom"])) . "</td>
                <td>" . date("d-m-y", strtotime($row["dateto"])) . "</td>
                <td>" . $row["place"] . "</td>
                <td>" . $row["time"] . "</td>
                <td>" . $row["end-time"] . "</td>
                <td>" . $row["orgby"] . "</td>
                <td>" . $row["participation_date"] . "</td>
                <td>" . $row["approval"] . "</td>
            </tr>";
            } ?>
        </tbody>
        </table>
</body>

</html>