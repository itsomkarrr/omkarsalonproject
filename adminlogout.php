<?php

require('essentials.php');

session_start();
session_destroy();
redirect('adminlogin.php');


?>