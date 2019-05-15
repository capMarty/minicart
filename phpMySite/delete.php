<?php 
require_once 'config.php';

$id = (int)$_GET['id'];

$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('location: temp/to_do.php');
