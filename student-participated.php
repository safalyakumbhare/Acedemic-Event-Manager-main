<?php
include("header-student.php");
// $stud = $user;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participated Event</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body class="bg-black">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 text-center ">
                <table class="table mt-5 wow fadeInUp table-hover bg-dark ">
                    <thead>
                        <th class="bg-dark text-white">Participated Events</th>
                    </thead>
                    <tbody>
                        <?php
                        $current_date = date('Y-m-d');
                        
                        $sql = "SELECT * FROM `participants` WHERE  `date` >= '$current_date' AND `studname` = '$user'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td class='bg-dark text-white'>" . $row['eventname'] . "</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>