<?php

@include 'data.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $subject = $_POST['subject'];
   $comment = $_POST['comment'];


   $insert = "INSERT INTO userinfodata	(name, email,subject,comment) VALUES('$name','$email','$subject','$comment')";
   mysqli_query($conn, $insert);
   header('location:home.php');


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Form</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">


</head>

<body>

   <?php include 'menu.php'; ?>





   <div class="form-container">

      <form action="" method="post">
         <h3>Contact Us</h3>

         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span
              class="error-msg">' . $error . '</span>';
            }

         }
         ?>




         <input type="text" class="form-control" name="name" required placeholder="Enter Your Full Name">
         <input type="email" class="form-control" name="email" required placeholder="Enter Your Email">
         <input type="text" class="form-control" name="subject" required placeholder="Enter Your subject">
         <textarea name="comment" class="form-control mt-3" rows="5" required placeholder="Write Your Comment"></textarea>
         <input type="submit" name="submit" value="Submit Now" class="form-btn">

      </form>
   </div>



</body>

</html>