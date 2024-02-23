<?php

require("admin_connection.php");

function image_upload($img)
{
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc))
    {
        header("location: admin_staff4.php?alert=img_upload");
        exit;
    }
    else{
        return $new_name;
    }
}


function image_remove($img)
{
    if(!unlink(UPLOAD_SRC.$img))
    {
       header("location: admin_staff4.php?alert=img_rem_fail");
       exit;
    }
}

if(isset($_POST['addstaff']))
{
   foreach($_POST as $key => $value)
   {
    $_POST[$key] = mysqli_real_escape_string($con,$value);
   }

   $imgpath = image_upload($_FILES['image']);

   $query = "INSERT INTO `staff3`(`image`, `name`, `about`, `position`) 
   VALUES ('$imgpath','$_POST[name]','$_POST[about]','$_POST[position])";

   if(mysqli_query($con,$query))
   {
    header("location: admin_staff4.php?success=added");
   }
   else{
    header("location: admin_staff4.php?alert=add_failed");
   }
}


if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query = "SELECT * FROM `staff3` WHERE `id`='$_GET[rem]'";
    $result = mysqli_query($con,$query);
    $fetch = mysqli_fetch_assoc($result);

    image_remove($fetch['image']);

    $query = "DELETE FROM `staff3` WHERE `id`='$_GET[rem]'";
    if(mysqli_query($con,$query))
    {
        header("location: admin_staff4.php?success=removed");
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Content-Type: image/png");


    }
    else{
        header("location: admin_staff4.php?alert=not_removed");
    }
}

?>