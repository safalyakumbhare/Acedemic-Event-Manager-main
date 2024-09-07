<?php
include("header-student.php");
include("connection.php");
$current_date = date('Y-m-d');

$sql = "SELECT * FROM `activity` WHERE `datefrom` >= '$current_date' AND `approval`='Approved by Principal' ORDER BY `datefrom`";
$res = mysqli_query($conn, $sql);

$num_events = mysqli_num_rows($res);
// $data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    h1 {
        font-size: 30px !important;
    }

    .navbar {
        background-color: #FF4533 !important;
    }
</style>

<body>
    

    <?php
    if ($num_events > 0) {
        while ($data = mysqli_fetch_assoc($res)) {
            $dateFormatted = date('d-m-y', strtotime($data['datefrom']));
            $dateFormatted1 = date('d-m-y', strtotime($data['participation_date']));
            echo '
    <div class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="footer_widget">
                            <div class="address_details text-center">
                                <h4 class="wow" data-wow-duration="1s" data-wow-delay=".3s">' . $dateFormatted . '</h4>
                                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">' . $data['name'] . '</h3>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">' . $data['description'] . '</p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Organized by : ' . $data['orgby'] . '</p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Time :' . $data['time'] . '</p>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Last date to Participate :' . $dateFormatted1 . '</p>

                                <a href="#" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">Participate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
    ?>
    </div>

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>