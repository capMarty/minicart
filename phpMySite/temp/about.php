<?php  
include_once '../config.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
  $title = "О нас";
  include_once '../block/head.php'; ?>
</head>
<body>
	<?php include_once '../block/header.php'; ?>

	<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">О нас</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Подробнее »</a></p>
    </div>
  </div>
	
	<div class="container">
    
    <div class="row">
      <div class="col-md-4">
        <h2>Заголовок</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">Узнать подробнее »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Заголовок</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">Узнать подробнее »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Заголовок</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Узнать подробнее »</a></p>
      </div>
    </div>

    <hr>

  </div>

	<?php include_once '../block/footer.php'; ?>
</body>
</html>