<?php
include ("header.php");
include ("connection.php");
$current_date = date('Y-m-d');


// $current_date = date('Y-m-d');

// Modify the SQL query to select only events with a starting date greater than or equal to the current date
$sql = "SELECT name FROM `activity` WHERE `datefrom` = '$current_date' AND `approval`='Approved by Principal'";
$res = mysqli_query($conn, $sql);

// Check if there are any events
$num_events = mysqli_num_rows($res);
$data = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="button.css">
  <title>Volenteer Home Page</title>

</head>

<body>
  <!-- <nav>
        <h1>Acadmeic event managment</h1>
        <ul>
            <li>Welcome admin</li>
        </ul>
    </nav> -->
  <center>
    <h1>
      <?php
      if ($num_events > 0) {
        echo '<img id="img" src="image/image1.png">Event Today : ' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . '<img id="img" src="image/image1.png">';

      } else {
        echo 'No Events Today';
      }
      ?>
    </h1>
  </center>
  <div class="container">

    <button class="bttn">
      <a href="Participants.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Add Participants</h2>
            <p>Record the list of Participants</p>

          </div>
        </div>
      </a>
    </button>
    <button class="bttn">
      <a href="Show-Participants.php">
        <div class="box hover-box" id="new-faculty">
          <div class="content">

            <h2>Show Participants</h2>
            <p>List of Participants</p>

          </div>
        </div>
      </a>
    </button>


  </div>
</body>

</html>