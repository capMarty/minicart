<?php  
include_once '../config.php';
?>

<header>
	
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">Имя компании </h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="../temp/index.php">Главная</a>
			<a class="p-2 text-dark" href="to_do.php">Список дел</a>
			<a class="p-2 text-dark" href="feedback.php">Обратная связь</a>
			<a class="p-2 text-dark" href="about.php">О нас</a>
		</nav>
		<?php if(isset($_SESSION['logged_user'])): ?>
			
				<a class="btn btn-outline-primary" href="../logout.php">Вы авторизованы!<br>Нажмите, чтобы выйти</a>
		<?php else: ?>
				<a class="btn btn-outline-primary" href="reg.php">Регистрация</a>
				<a class="btn btn-outline-primary" href="auth.php">Войти</a>
		<?php endif; ?>
	</div>
</header>
	