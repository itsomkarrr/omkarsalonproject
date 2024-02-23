<?php
require('essentials2.php');
require('admindb_config2.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Care For Women</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/haircarewomen.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="heading">
        <h1>Hair Care Services For Men and Women</h1>

    </div>

    <div class="container">
        <?php


        $res = selectAll('services3');
        $path = SERVICE3_IMG_PATH;

        while ($row = mysqli_fetch_assoc($res)) {
            echo <<<data
                    <section class="about">
                        <div class="about-image">
                        <img src="$path$row[image]" alt="">
                        </div>
    
    
                        <div class="content">
                        <h2>$row[name]</h2>
                        <h3 style="color: #ffe089; font-size: 1.5em; font-weight: bold;">Category - $row[category]</h3>
                            <p>$row[description]</p>
                            <h3 style="color: #007BFF; font-size: 1.5em; font-weight: bold;">Price: $row[price]</h3>
                            <a href="bookform.php" class="read-more">Book Now</a>  
                        </div>
                    </section>

                    <br><br><br><br><br><br><br><br>
                    

                data;
        }
        ?>

        



    </div>

    


    <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>



</body>

</html>