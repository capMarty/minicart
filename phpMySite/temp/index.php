<?php  
include_once '../config.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = "php веб-сайт";
	include_once '../block/head.php'; ?>
</head>
<body>
	<?php include_once  "../block/header.php"; ?>	

	<div class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			<h1 class="display-4">Наши статьи</h1>
		</div>
		<div class="d-flex flex-wrap">
			<?php for($i = 1; $i < 6; $i++): ?>
				<div class="card mb-4 shadow-sm">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Статья <?php echo "$i"; ?></h4>
					</div>
					<div class="card-body">
						<img class="img-thumbnail" src="../img/<?=$i ?>.jpg" alt="">
						
						<button type="button" class="btn btn-lg btn-block btn-outline-primary mt-4">Подробнее</button>
					</div>
				</div>

				<?php endfor; ?></div>
			</div>
			
			<?php include_once "../block/footer.php"; ?>
		</body>
		</html>



