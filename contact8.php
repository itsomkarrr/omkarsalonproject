<?php
require('admindb_config.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">


    <style>
        .container {}

        #contact_design {
            background-color: #382c28;
            padding: 2%;
        }

        #heading {

            text-align: center;
            font-size: 24px;
            color: antiquewhite;
        }

        .us_design {
            color: white;
            font-size: 38px;
            text-align: center;
            margin-bottom: 4%;
            margin-top: 4%;
        }

        .custom-btn {
            padding: 10px 40px;
            font-size: 15px;
        }

        .form-control::placeholder {
            font-size: 14px;
            color: #333;

        }

        .form-control {
            width: 100%;
            /* Set the input width to 100% */
            padding: 10px;
            /* Add padding for better appearance */
        }

        .form-label {
            font-weight: 500;
        }

        .form-control {
            font-size: 16px;
            /* Set the font size for form controls */
        }
    </style>


</head>

<body>

    <?php include 'menu.php'; ?>


    <div class="my-5 px-4">
        <h2>Contact Us</h2>

    </div>

    <div class="container mx-auto text-center">
        <h3 class="us_design">Contact Us</h3>

        <div class="col-lg-6 col-md-4 mb-5 px-4 mx-auto">
            <div id="contact_design">
                <form method="POST">
                    <h5 id="heading">Send a message</h5>

                    <div class="mt-4">
                        <label for="name" class="form-label" style="font-weight: 500;"></label>
                        <input name="name" required type="text" class="form-control shadow-none"
                            style="text-transform: none;" placeholder="Name">
                    </div>


                    <div class="mt-3">
                        <label for="email" class="form-label" style="font-weight: 500;"></label>
                        <input name="email" required type="email" class="form-control shadow-none"
                            style="text-transform: none;" placeholder="Email">
                    </div>

                    <div class="mt-3">
                        <label for="subject" class="form-label" style="font-weight: 500;"></label>
                        <input name="subject" required type="text" class="form-control shadow-none"
                            style="text-transform: none;" placeholder="Subject">
                    </div>

                    <div class="mt-3">
                        <label for="message" class="form-label" style="font-weight: 500;"></label>
                        <textarea name="message" required rows="5" class="form-control shadow-none"
                            style="text-transform: none;" placeholder="Message"></textarea>
                    </div>

                    <button name="send" class="btn btn-primary custom-btn mt-3" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>







    <?php
    function alert()
    {
        
    }
    if (isset($_POST['send'])) {
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

        $res = insert($q, $values, 'ssss');
        if ($res == 1) {
            alert('success', 'Mail sent!');
        } else {
            alert('error', 'Server Down! Try again later');
        }
    }

    ?>


    <?php include 'footer.php'; ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>