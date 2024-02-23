<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Appointment Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form action="bookform8.php" method="post">
        <h2>Salon Appointment Booking</h2>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Contact:</label>
        <input type="tel" id="phone" name="phone" required>
        
        <label for="service">Select Service:</label>
        <select id="service" name="service" required>
            <option value="haircut">Haircut</option>
            <option value="coloring">Hair Coloring</option>
            <option value="manicure">Manicure</option>
            <!-- Add more services as needed -->
        </select>
        
        <label for="date">Select Date:</label>
        <input type="date" id="date" name="date" required>
        
        <label for="time">Select Time:</label>
        <input type="time" id="time" name="time" required>
        
        <button type="submit">Book Appointment</button>
    </form>


    <?php

// Include the database configuration file
require('admindb_config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $service = $_POST["service"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // SQL query to insert data into the 'appointments' table
    $sql = "INSERT INTO appointments (name, email, contact, services, appointment_date, appointment_time) 
            VALUES ('$name', '$email', '$phone', '$service', '$date', '$time')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "<h2>Appointment Booked Successfully</h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}

?>


</body>
</html>
