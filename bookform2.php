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
                    <label for="name" class="form-label" style="font-weight: 500; font-size: 18px;"></label>
                    <input name="name" required type="text" class="form-control shadow-none"
                        style="text-transform: none; font-size: 16px; padding: 12px; border-radius: 8px;"
                        placeholder="Name">
                </div>



                 <div class="mt-3">
                    <label for="email" class="form-label" style="font-weight: 500; font-size: 18px;"></label>
                    <input name="email" required type="email" class="form-control shadow-none"
                        style="text-transform: none; font-size: 16px; padding: 12px; border-radius: 8px;"
                        placeholder="Email">
                </div>
                
                <div class="mt-3">
                    <label for="contact" class="form-label" style="font-weight: 500; font-size: 18px;"></label>
                    <input name="contact" required type="tel" class="form-control shadow-none"
                        style="text-transform: none; font-size: 16px; padding: 12px; border-radius: 8px;"
                        placeholder="Contact">
                </div>
                
                
                <div class="mt-3">
                    <label for="services" class="form-label text-light" style="font-weight: 500; font-size: 18px;">Select Service:</label>
                    <select name="services" required class="form-select shadow-none" style="text-transform: none; font-size: 16px; padding: 12px; border-radius: 8px;">
                        <optgroup label="Hair Care">
                            <option value="Hair Cuts & Styling - Women">Hair Cuts & Styling - Women</option>
                            <option value="Hair Colouring & Highlights - Women">Hair Colouring & Highlights - Women</option>
                            <option value="Hair Spa - Women">Hair Spa - Women</option>
                            <option value="Hair Straightening - Women">Hair Straightening - Women</option>
                            <option value="Hair Cut - Men">Hair Cut - Men</option>
                            <option value="Beard Trim / Shave - Men">Beard Trim / Shave - Men</option>
                            <option value="Hair Colour - Men">Hair Colour - Men</option>
                            <option value="Hair Straightening - Men">Hair Straightening - Men</option>
                        </optgroup>
                        <optgroup label="Skin Care">
                            <option value="Face Clean Up - Women">Face Clean Up - Women</option>
                            <option value="Facial - Women">Facial - Women</option>
                            <option value="Face Masks - Women">Face Masks - Women</option>
                            <option value="Skin Facial - Men">Skin Facial - Men</option>
                            <option value="Detan Face - Men">Detan Face - Men</option>
                        </optgroup>
                        <optgroup label="Body Care">
                            <option value="Manicure - Women">Manicure - Women</option>
                            <option value="Pedicure - Women">Pedicure - Women</option>
                            <option value="Threading & Waxing - Women">Threading & Waxing - Women</option>
                            <option value="Under Eye Treatment - Men">Under Eye Treatment - Men</option>
                            <option value="Manicure - Men">Manicure - Men</option>
                            <option value="Pedicure - Men">Pedicure - Men</option>
                        </optgroup>
                    </select>
                </div>
                
                
                <div class="mt-3">
                    <label for="date" class="form-label text-light" style="font-weight: 500; font-size: 18px;">Select Date:</label>
                    <input name="date" required type="date" class="form-control shadow-none"
                        style="text-transform: none; font-size: 16px; padding: 12px; border-radius: 8px;"
                        min="2024-02-16" max="2024-02-28">
                </div>


                <div class="form-group mt-3">
                    <label for="time" class="text-light" style="font-weight: 500; font-size: 18px;">Select Time:</label>
                    <select name="time" class="form-control shadow-none" style="font-size: 16px; padding: 12px; border-radius: 8px;" required onsubmit="return checkTimeAvailability()">
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="09:30 AM">09:30 AM</option>
                        <option value="10:00 AM" disabled>10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="11:00 AM" disabled>11:00 AM</option>
                        <option value="11:30 AM">11:30 AM</option>
                        <option value="02:00 PM" disabled>02:00 PM</option>
                        <option value="03:30 PM">03:30 PM</option>
                    </select>
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

        $q = "INSERT INTO `user_bookform3`(`name`, `email`,`contact`,`services`,`date`,`time`,`message`) VALUES (?,?,?,?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'],$frm_data['contact'],$frm_data['services'],$frm_data['date'],$frm_data['time'], $frm_data['message']];

        $res = insert($q, $values, 'sssssss');
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



  <!-- User Appointments Box -->
   <!-- <div class="big-box" style="width: 48%;">
        <div class="big-box-title">User Appointments</div>
        <h1><?php echo $totalAppointments; ?></h1>
        <p>Total Appointments</p>
        <p>Confirmed: <?php echo $confirmedAppointments; ?></p>
        <a href="user_bookings.php" class="btn btn-light mt-3">View Appointments</a>
    </div> -->