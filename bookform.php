<?php
require('essentials2.php');
include 'admindb_config.php'; // Include the database connection file

if (isset($_POST['send'])) {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $services = implode(", ", $_POST["services"]);
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Insert data into the database
    $sql = "INSERT INTO appointments (name, email, contact, services, appointment_date, appointment_time) 
            VALUES ('$name', '$email', '$contact', '$services', '$date', '$time')";

    if ($con->query($sql) === TRUE) {
        echo "Appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$servicesWithPrices = selectAll('services3');
$servicesWithPrices2 = selectAll('services3');

$con->close(); // Close the database connection


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Appointment Booking</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2a201c;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            margin-top: 90px;
        }

        h2 {
            text-align: center;
            color: burlywood;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            margin-top: 34px;
            background-color: #493b37;
            padding: 25px;
            /* Increased padding */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 15px;
            /* Increased margin */
            color: #2a201c;
            font-size: 18px;
            /* Increased font size */
        }

        input,
        select {
            width: 100%;
            padding: 30px;
            /* Increased padding */
            margin-bottom: 20px;
            /* Increased margin */
            border: 1px solid #2a201c;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 30px;
            /* Increased font size */
            font-weight: 23px;
        }



        input[type="submit"] {
            background-color: #2a201c;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3a2d27;
            color: #fff;
        }

        .form-group {
            margin-bottom: 30px;
            /* Increased margin */
        }

        .form-control {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            /* Adjust the font size */
            /* ... Other styles ... */
        }

        .form-control::placeholder {
            font-size: 15px;
        }



        optgroup {
            font-size: 20px;
        }

        option {
            font-size: 15px;
            /* Set the font size for option */
        }

        .btn {
            padding: 15px 20px;
            /* Adjust the padding */
            font-size: 20px;
            /* Adjust the font size */
            /* ... Other styles ... */
        }
    </style>

</head>

<body>

    <?php include 'menu.php'; ?>
    <br><br><br><br><br><br><br><br><br>

    <h2 class="text-light"
        style="text-align: center; color: #ffc107; margin-top: 20px; font-size: 36px; font-weight: bold; text-shadow: 2px 2px 4px #000;">
        Salon Appointment Booking Form</h2>


    <form action="bookform.php" method="post">
        <div class="form-group">
            <label for="name"></label>
            <input type="text" placeholder="Name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email"></label>
            <input type="email" placeholder="Email" style="text-transform: none;" name="email"
                class="form-control" required>
        </div>

        <div class="form-group">
            <label for="contact"></label>
            <input type="tel" placeholder="Contact Number" name="contact" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="services" class="text-light">Select Services :-</label>
            <select  name="services[]" class="form-control" required>
            <?php
                foreach ($servicesWithPrices as $service) {
                    echo '<option value="' . $service['id'] . '">' . $service['name'] . ' - $' . $service['price'] . '</option>';
                }
                ?>
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





        <div class="form-group">
            <label for="date" class="text-light">Select Date :-</label>
            <input type="date"  name="date" class="form-control" required min="2024-02-15" max="2024-02-28">
        </div>

        <div class="form-group">
            <label for="time" class="text-light">Select Time :-</label>
            <select  name="time" class="form-control" required onsubmit="return checkTimeAvailability()">
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


        <div class="form-group">
            <input type="submit" value="Book Appointment" name="send" class="btn">
        </div>
    </form>

    

    <br><br><br><br><br><br><br><br><br><br><br><br>


    <?php include 'footer.php'; ?>

</body>

</html>