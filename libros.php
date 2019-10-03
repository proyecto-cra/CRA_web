<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Catálogo de Libros.</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="icon" type="text/image" href="img/Logoo.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
   <meta charset="utf-8">
</head>
<body style="background-color: #7daae6;">

  	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#00091e; font-family: simplicity; font-size:30px; ">
		<a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 80px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="cerrarSesion.php">Cerrar Sesion <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="ajustes.php?e=1">Ajustes<span class="sr-only">(current)</span></a>
				</li>
				<?php if (isset($_SESSION['cargo']) == 1 || isset($_SESSION['cargo']) == 2): ?>
				<li class="nav-item active">
					<a class="nav-link" href="informes.html">Informes<span class="sr-only">(current)</span></a>
				</li>
				<?php endif ?>
			</ul>
			<span class="navbar-text" style="font-size: 50%;">
				<em><?php echo "Bienvenid@ " . $_SESSION["nombre"]; ?></em>
			</span>
		</div>
	</nav>

   	<!-- Generos -->
	<div class="container-fluid h-100" style="font-family: simplicity;"> 
		<div class="row w-100 align-items-center" style="background-color: #00091e; margin-left: 0.1%; margin-top: 4%; margin-bottom: 4%; padding-left: 0.1%;">
			<div class="col text-center rounded" class="rounded">
				<div style="font-size: 300%; padding: 4%; background-color: white; margin: 2%; border-style: solid;border-color: #00091e;" role="group"  class="rounded" >
					<p style="; font-size: 100%;"> Géneros</p>
					<?php require "modulos/rellenadorGeneros.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Titulo Novedades y btn Ordenar Por -->
	<div class="container-fluid h-100" style="font-family: simplicity; margin-bottom: 4%;"> 
		<div class="row w-100 align-items-right">
			<p style="top-bottom: 50%; font-size: 300%; margin-left: 2%; position: absolute;"> Novedades</p>
			<div class="col text-right">
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="background-color: #00091e; border-color: transparent; font-family: simplicity; margin: 13%;">
						Ordenar por
						<div class="dropdown-menu" style="background-color: #00091e; color:white; font-family: simplicity;">
							<a class="dropdown-item" href="#" style="color: white;">Alfabeticamente</a>
							<a class="dropdown-item" href="#"style="color: white;"> Recientes</a>
							<a class="dropdown-item" href="#"style="color: white;">Más Leídos</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"style="color: white;">Otros...</a>
						</div>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Fila de Cartas (5 cartas por filas)-->
	<?php require "modulos/rellenadorLibros.php"; ?>

	<!-- "BR"/"Salto de linea" -->
	<div style="background-color: #e0c614; height: 5%; margin-top: 10%"></div>

	<!-- Footer -->
	<footer class="page-footer font-small pt-4" style="color: #7daae6; background-color: #00091e; font-family: simplicity; font-size: 130%;">
		<div class="container">
			<img src="img/xd.png" style="width: 10%; height: 10%; margin-bottom:-18%; ">
			<img src="img/progra.jpg" style="width: 15%; height: 15%; margin-bottom:-8%; border-radius: 50%;  margin-left: 90%;">
			<ul class="list-unstyled list-inline text-center">
				<li class="list-inline-item">
					<a class="btn-floating btn-fb mx-1">
						<i class="fab fa-facebook-f"></i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-tw mx-1">
						<i class="fab fa-twitter"></i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-gplus mx-1">
						<i class="fab fa-google-plus-g"></i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-dribbble mx-1">
						<i class="fab fa-dribbble"></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer-copyright text-center py-3">© 2019 Copyright:Tomás Celis, Monserrat Espinoza, Santiago Fierro, Nataly Gonzalez y Melissa Silva.
			<a href="https://www.lcdportales.cl/home/">  4to I / L.C.D.P </a>
		</div>
	</footer>
</body>