<?php

@include 'data.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $contact = $_POST['contact'];
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);


   $select = " SELECT * FROM userdata WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);


   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';

   } else {

      if ($password != $cpassword) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO userdata(name, email,contact,password) VALUES('$name','$email','$contact','$password')";
         mysqli_query($conn, $insert);
         
         

         header('location:index.php');
      }
   }

}
;


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>


   <link rel="stylesheet" href="style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Register Form</h3>
         

         <?php

         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
         }
         ;
         ?>


         <input type="text" name="name" required placeholder="Enter Your Full Name">
         <input type="email" name="email" required placeholder="Enter Your Email">
         <input type="text" name="contact" required placeholder="Enter Your Contact Number">
         <input type="password" name="password" required placeholder="Enter Your Password">
         <input type="password" name="cpassword" required placeholder="Confirm Your Password">
         <input type="submit" name="submit" value="register now" class="form-btn">
         <p>Already Have An Account? <a href="index.php">Log In</a></p>
      </form>

   </div>

</body>

</html>