<?php 

include_once 'config.php';
unset($_SESSION['logged_user']);
header("location: temp/index.php");
 ?>