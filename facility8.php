<?php
require('essentials.php');
require('admindb_config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACILITIES</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #2a201c;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

        }

        .col-container {
            max-width: 1200px;
            width: 100%;
        }

        .col-lg-4 {
            flex-basis: 33.33%;
        }

        footer {
            background-color: #f0f0f0;
            padding: 1px 0;
            text-align: center;
        }


        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
            ;
        }

        .h-font {
            color: var(--dark);
        }


        .bg-burlywood {
            background-color: burlywood;
        }

        .larger-text {
            font-size: 15px;
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center text-light" style="margin-top: 20px;">Facility Information</h2>
        <div class="h-line" style="background-color: #deb887;"></div>
        <p class="text-center mt-3">
            Transforming Beauty With Seamless Online Booking And Exceptional Services.
        </p>
    </div>

    <div class="my-5 px-4">
        <h1 class="fw-bold h-font text-center text-light" style="margin-top: 10px; font-size: 30px;">Facility
            Information
        </h1>
        <div class="h-line" style="height: 4px; background-color: #463732;"></div>
        <p class="text-center mt-3 text-light" style="font-size: 18px;">
            Transforming Beauty With Seamless Online Booking And Exceptional Services.
        </p>
    </div>
    <br><br><br><br>


    <div class="container">
        <div class="row">

            <?php

            $res = selectAll('facilities');
            $path = FACILITIES_IMG_PATH;

            while ($row = mysqli_fetch_assoc($res)) {
                echo <<<data
                    <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop" style="transition: transform 0.3s ease-in-out;">
                
                        <div class="d-flex align-items-center mb-3">
                            <img src="$path$row[icon]" width="80px" style="border-radius: 50%; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);">
                            <h3 class="m-0 ms-4 fs-7 text-primary" style="font-weight: bold; color: #333;">$row[name]</h3>
                        </div>
                
                        <p class="fs-9 larger-text" style="color: #2a201c;">$row[description]</p>
                
                    </div>
                </div>
            data;
            }

            ?>

        </div>
    </div>


    <?php include 'footer.php'; ?>


</body>

</html>