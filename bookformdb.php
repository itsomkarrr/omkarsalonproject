<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "landingdb";


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}  

 function update($sql, $values, $datatypes)
{
    $conn = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed - update");
        }


    } else {
        die("query cannot be prepared - update");
    }
} 


 function delete($sql, $values, $datatypes)
{
    $con = $GLOBALS['conn'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed - delete");
        }
    } else {
        die("query cannot be prepared - delete");
    }
} 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $services = implode(", ", $_POST["services"]);
    $date = $_POST["date"];
    $time = $_POST["time"];


    $insertQuery = "INSERT INTO appointments (name, email, contact, services, appointment_date, appointment_time)
                    VALUES ('$name', '$email', '$contact', '$services', '$date', '$time')";

    if ($conn->query($insertQuery) === TRUE) {

        header("Location: bookform.php?status=success");
        exit();
    } else {

        header("Location: bookform.php?status=error");
        exit();
    }
}


if (isset($_GET['status'])) {
    $status = $_GET['status'];


    if ($status === 'success') {
        echo '<div class="alert alert-success text-center" role="alert">';
        echo '<h1 class="alert-heading">Booking Successful!!!</h1>';
        echo '<p style="font-size: 20px;" >Thank you! Your appointment has been booked successfully.</p>';
        echo '<a href="bookform.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
          </svg></a>';


        echo '</div>';
    } elseif ($status === 'error') {
        echo '<div class="alert alert-danger text-center" role="alert">';
        echo '<h2 class="alert-heading">Booking Failed</h2>';
        echo '<p>Error: There was an issue with your booking. Please try again.</p>';
        echo '<a href="bookform.php" class="btn btn-secondary">Cancel</a>';
        echo '</div>';
    }
}









?>