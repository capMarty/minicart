<?php 
require_once 'config.php';
$task = trim(htmlspecialchars($_POST["task"]));

if ($task == "") {
	echo "введите задание";
	exit();
}

$sql = "INSERT INTO tasks(task) VALUES (:task)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['task'=>$task]);

header("location: temp/to_do.php");