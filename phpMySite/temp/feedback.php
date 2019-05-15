<?php  
include_once '../config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$title = "Обратная связь";
	include_once '../block/head.php'; ?>
</head>
<body>
	<?php include_once '../block/header.php'; ?>

	<div class="container">
		<div class="text-center">
			<h1 class="h3 mb-3 font-weight-normal">Контактная форма</h1>
			<form id="form" class="form-signin col-md-4 offset-md-4 mt-5">

				<div id="error" class="mb-3"></div>
				<input type="email" id="email"  class="form-control mb-3" placeholder="Email "  autofocus="">
				<input type="text" id="name"  class="form-control mb-3" placeholder="Введите имя"  >
				<input type="tel" id="phone"  class="form-control mb-3" placeholder="Введите телефон" >
				<textarea id="msg" class="form-control" placeholder="Введите сообщение "></textarea>
				<button id="sendmail" class="btn btn-lg btn-primary btn-block mt-4" type="button" name="done">Отправить</button>
			</form>
		</div>
	</div>


	<?php include_once '../block/footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
				
				
			

				