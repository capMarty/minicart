<?php  
include_once '../config.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = "Список дел";
	include_once '../block/head.php'; ?>
</head>
<body>
	<?php include_once  "../block/header.php"; ?>

	<div class="container" style="width: 25%!important;">
		<h1 class="mb-4 mt-4">Список дел </h1>
		<form id="form-to-do" action="../add.php" method="POST" >
			<input type="text" name="task" placeholder="Нужно сделать..." class="form-control mt-4" required="" autofocus="">
			<button type="submit" name="btn" class="btn btn-primary mt-4">Отправить</button>
		</form>



		<?php 
		

		echo "<ul class='list-group mt-4'>";
		$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
		while ($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo '<li class="list-group-item mb-3"><b>'.$row->task.'</b><a href="../delete.php?id='.$row->id.'"><button class="btn btn-outline-danger">Удалить</button></a></li>';
		}
		echo "<ul>";
		?>
	</div>
	<?php include_once "../block/footer.php"; ?>
</body>
</html>

