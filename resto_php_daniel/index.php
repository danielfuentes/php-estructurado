<?php
	include_once("baseDatos.php");
	/*foreach ($articulos as $key => $value) {
		echo "$key  <br>";
		foreach ($value as $key => $value) {
			echo "$key : $value <br>";
		}
	}
	exit*/;?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Diseño Responsive Daniel</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach ($articulos as $key => $value) :?>
				<article class="product">
					<div class="photo-container">
					<img class="photo" src="images/<?=$value['imagen'];?>" alt="pdto 01">
					<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
					<a class="zoom" href="#">Ampliar foto</a>
					</div>
					<h2><?=$value['titulo'];?></h2>
					<p><?=$value['descripcion'] ;?></p>
					<a class="more" href="#">ver más</a>
				</article>				
			<?php endforeach;?>	

		</section>
		
		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
