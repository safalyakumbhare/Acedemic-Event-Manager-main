<?php

include("header.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Participants</title>
    <link rel="stylesheet" href="New.css">
</head>
<style>
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

<body>
    <div class="container">
        <h1 class="title">Add Participants</h1>
        <form class="registration-form" action="Add-Participants.php" method="POST">
            <label for="hodName">Name of Participant:</label>
            <input type="text" id="Name" name="Name" required>

            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="year">Year:</label>
            <input type="text" id="year" name="year" required>

            <label for="phone">Phone:</label>
            <input type="phone" id="phone" name="phone" required>

            <label for="event">Event : </label>
            <?php

            $current_date = date("Y-m-d");

            // Display a dropdown with activities
            $sql = "SELECT name FROM activity WHERE `datefrom` >= '$current_date' AND approval = 'Approved by Principal'";
            echo "<select name='activity' required>";
            if (mysqli_num_rows(mysqli_query($conn, $sql)) == 0) {
                echo "<option value=''>No Events</option>";
            } else {
                echo "<option value=''>Select</option>";
            }
            foreach ($conn->query($sql) as $row) {
                echo "<option value='{$row['name']}'>{$row['name']}</option>";
            }
            echo "</select>";
            ?>

            <input type="submit" name="send" value="Register">
            <button type="button" class="cancel-button">Cancel</button>
        </form>
    </div>
</body>

</html>