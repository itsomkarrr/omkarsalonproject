<?php
require('essentials.php');
require('admindb_config.php');
adminLogin();

// Get the count of booked appointments
$q = "SELECT COUNT(*) as totalAppointments FROM `user_bookform3`";
$result = mysqli_query($con, $q);
$countData = mysqli_fetch_assoc($result);
$totalAppointments = $countData['totalAppointments'];

// Get the count of confirmed appointments
$qConfirmed = "SELECT COUNT(*) as confirmedAppointments FROM `user_bookform3` WHERE `seen` = '1'";
$resultConfirmed = mysqli_query($con, $qConfirmed);
$countConfirmed = mysqli_fetch_assoc($resultConfirmed);
$confirmedAppointments = $countConfirmed['confirmedAppointments'];



// Get the count of user queries
$qr = "SELECT COUNT(*) as totalQuery FROM `user_queries`";
$resultQuery = mysqli_query($con, $qr);
$countQuery = mysqli_fetch_assoc($resultQuery);
$totalQuery = $countQuery['totalQuery'];


$qReadQueries = "SELECT COUNT(*) as readQueries FROM `user_queries` WHERE `seen` = '1'";
$resultReadQueries = mysqli_query($con, $qReadQueries);
$countReadQueries = mysqli_fetch_assoc($resultReadQueries);
$readQueries = $countReadQueries['readQueries'];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    
    
    <style>
         body {
            height: 1000px;
         
        }
        
          .big-box-container {
            display: flex;
           justify-content: space-evenly;
        }

        .big-box {
            background-color: #2a201c;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 250px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .big-box:hover {
            background-color: #493a35;
        }

        .big-box h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .big-box p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .big-box-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .btn-light {
            background-color: burlywood;
            color: #2a201c;
            border-color: rgb(96, 65, 24);
        }

        .btn-light:hover {
            background-color: rgb(179, 134, 76);
            color: #fff;
        }

        h1.text-center {
            padding: 10px;
            margin-bottom: 70px;
            background-color: burlywood; /* Dark background color */
            color: #fff; /* White text color */
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); /* Text shadow for a subtle effect */
            border-bottom: 2px solid; /* Green border at the bottom */
            border-radius: 10px;
        }

        .row{
            height: 1000px;
        }
        
    </style>
</head>

<body>

    <?php require('adminheader.php'); ?>

    <div class="container-fluid" id="main-content">
        
        <div class="row">
            
            <div class="col-lg-10 ms-auto p-4 bg-light text-dark overflow-hidden">
            <h1 class="text-center">Admin Dashboard</h1>
                <!-- Display the count of user appointments, confirmed, and deleted in a flex container -->
                <div class="big-box-container">
                    <!-- User Appointments Box -->
                    <div class="big-box">
                        <div class="big-box-title">User Appointments</div>
                        <h1><?php echo $totalAppointments; ?></h1>
                        <p>Total Appointments</p>
                        <p>Confirmed: <?php echo $confirmedAppointments; ?></p>
                     
                        <a href="user_bookings.php" class="btn btn-light mt-3">View Appointments</a>
                    </div>

                    <!-- User Queries Box -->
                    <div class="big-box">
                        <div class="big-box-title">User Queries</div>
                        <h1><?php echo $totalQuery; ?></h1>
                        <p>Total Queries</p>
                        <p>Read Queries: <?php echo $readQueries; ?></p>
                        <a href="user_queries.php" class="btn btn-light mt-3">View Queries</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>