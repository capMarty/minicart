<?php  


$server ="127.0.0.1"; 
$db = "db";
$password = "qwerty1995";
$user = "root";


$dsn = "mysql:host=localhost;dbname=$db;charset=utf8";
$pdo = new PDO($dsn, $user, $password);

session_start();
