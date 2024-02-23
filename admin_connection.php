<?php

$con = mysqli_connect("localhost", "root", "", "landingdb");

if (mysqli_connect_errno()) {
    die("Cannot Connect to database" . mysqli_connect_errno());
}


define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."http://127.0.0.1/SALON-project2_Copy'/uploads5/");

define("FETCH_SRC","http://127.0.0.1/SALON-project2_Copy'/uploads5/");
?>