<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .alert {
            margin-top: 20px;
            padding: 20px;
            border-radius: 8px;
            font-size: 18px;
        }

        .alert-success {
            background-color: #dff0d8;
            border: 1px solid #3c763d;
            color: #3c763d;
        }

        .alert-danger {
            background-color: #f2dede;
            border: 1px solid #a94442;
            color: #a94442;
        }

        .receipt {
            display: none;
        }

        .receipt h3 {
            color: #333;
        }

        .receipt p {
            margin-bottom: 10px;
        }

        .btn-secondary {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Payment Receipt</h2>

        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "landingdb";

        $conn = new mysqli($host, $user, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

         // Check if form is submitted
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Extract form submission data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $services = implode(", ", $_POST["services"]);
            $date = $_POST["date"];
            $time = $_POST["time"];

            // Fetch data from the appointments table
            $fetchQuery = "SELECT * FROM appointments WHERE email = '$email' AND appointment_date = '$date' AND appointment_time = '$time'";
            $result = $conn->query($fetchQuery);

            if ($result && $result->num_rows > 0) {
                // Display the fetched data
                $row = $result->fetch_assoc();
                echo '<div id="receipt">';
                echo '<h3>Payment Receipt</h3>';
                echo '<p><strong>Customer Name:</strong> ' . htmlspecialchars($row['name']) . '</p>';
                echo '<p><strong>Email:</strong> ' . htmlspecialchars($row['email']) . '</p>';
                echo '<p><strong>Contact Number:</strong> ' . htmlspecialchars($row['contact']) . '</p>';
                echo '<p><strong>Services:</strong> ' . htmlspecialchars($row['services']) . '</p>';
                echo '<p><strong>Appointment Date:</strong> ' . htmlspecialchars($row['appointment_date']) . '</p>';
                echo '<p><strong>Appointment Time:</strong> ' . htmlspecialchars($row['appointment_time']) . '</p>';
                echo '</div>';
            } else {
                echo '<p>No data found.</p>';
            }
        } else {
            echo '<p>Form not submitted.</p>';
        }
        ?>

        <div id="receipt" class="hidden">
            <h3>Payment Receipt</h3>
            <p><strong>Customer Name:</strong> <?php echo isset($name) ? htmlspecialchars($name) : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($email) ? htmlspecialchars($email) : ''; ?></p>
            <p><strong>Contact Number:</strong> <?php echo isset($contact) ? htmlspecialchars($contact) : ''; ?></p>
            <p><strong>Services:</strong> <?php echo isset($services) ? htmlspecialchars($services) : ''; ?></p>
            <p><strong>Appointment Date:</strong> <?php echo isset($date) ? htmlspecialchars($date) : ''; ?></p>
            <p><strong>Appointment Time:</strong> <?php echo isset($time) ? htmlspecialchars($time) : ''; ?></p>
        </div>
    </div>

</body>
</html>
