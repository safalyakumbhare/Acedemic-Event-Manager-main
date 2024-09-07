<?php
include("header-student.php");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    textarea:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    .uneditable-input:focus {
        border-color: #DC3545;
        box-shadow: 0 1px 1px #DC3545 inset, 0 0 8px #DC3545;
        outline: 0 none;
    }
</style>

<body class="bg-black">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 h-50 p-5 bg-dark mt-5 rounded-3 wow fadeInUp">
                <form action="changepass-student.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Current Password :</label>
                        <input type="text" class="form-control bg-secondary text-light" name="currentpass">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">New Password :</label>
                        <input type="text" class="form-control bg-secondary text-light" name="newpass">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Confirm Password :</label>
                        <input type="text" class="form-control bg-secondary text-light" name="confirmpass">
                    </div>
                    <div class="mt-3 w-100 justify-content-center">
                        <input type="submit" class="btn btn-outline-danger" value="Change Password" name="change">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>