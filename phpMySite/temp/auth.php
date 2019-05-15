<?php  
include_once '../config.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = "Вход";
	include_once '../block/head.php'; ?>
</head>
<body>
	<?php include_once '../block/header.php'; ?>

	<div class="container">
		<div class="text-center">
			<form class="form-signin col-md-4 offset-md-4 mt-5" action="../check_auth.php" method="Post">
				
				<h1 class="h3 mb-3 font-weight-normal">Введите данные</h1>
				
				<input type="text" name="login"  class="form-control mb-3" placeholder="Логин " required="" autofocus="">
				
				<input type="password" name="password" class="form-control mb-3" placeholder="Пароль" required="">

				<button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_in">Войти</button>
				
			</form>
		</div>
	</div>

		<?php include_once '../block/footer.php'; ?>
</body>
</html>