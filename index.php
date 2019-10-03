<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>

  <title> CRA LCDP </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/js" href="pop.js">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="text/image" href="img/Logoo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  </head>
<body style="background-color: #00091e;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#00091e; font-family: simplicity; font-size:30px; ">
  <a class="navbar-brand" href=""><img src="img/logo.png" style="width: 80px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" targer="_self" href="login.php">Iniciar sesión<span class="sr-only">(current)</span></a>
      </li>
      <?php if (isset($_SESSION["rut"]) == ""): ?>
        <li class="nav-item active">
          <a class="nav-link" targer="_self" href="libros2.php">Libros</a>
        </li>
      <?php endif ?>
      <?php if (isset($_SESSION["rut"]) != ""): ?>
        <li class="nav-item active">
          <a class="nav-link" targer="_self" href="libros2.php">Libros</a>
        </li>
      <?php endif ?>
 
    </ul>
    <span class="navbar-text" style="font-size: 50%;">
     <em> No dejes para mañana lo que puedes leer hoy</em>
    </span>
  </div>
 </nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="false" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner " >
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
<div class="card" style="width: 100%; border-style: none; height: 30%;">
  <img class="card-img-top" src="img/tarjeta.png" alt="Card image cap">

    	<div class="container-fluid h-100" style="background-color: #00091e;" > 
    		<div class="row w-100 align-items-center"style="background-color: #00091e;">
    			<div class="col text-center" style="background-color:#00091e; ">
    			<button  class= "btn btn-primary"style="background-color: #7daae6;  font-family: simplicity; font-size:200%; border-style:solid; margin:5%; color: #00091e; border-color: #7daae6;"><a target ="_self" href="libros2.php" style="text-decoration: none; color: #00091e;"><strong> Ver catálogo. </strong></a></button>

    			</div>	
    		</div>
    	</div>
<div style="background-color: #e0c614; height: 5%;">
	<p style="color:#e0c614; font-size: 1.5px;">AAAAAAA</p>
 </div>
<footer class="page-footer font-small pt-4" style="color: #7daae6; background-color: #00091e; font-family: simplicity; font-size: 130%; ">
  <div class="container">
  	<img src="img/xd.png" style="width: 10%; height: 10%; margin-bottom:-18%; ">
  	<img src="img/progra.jpg" style="width: 15%; height: 15%; margin-bottom:-8%; border-radius: 50%;  margin-left: 90%;">



    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:Tomás Celis, Monserrat Espinoza, Santiago Fierro, Nataly Gonzalez y Melissa Silva.
    <a href="https://www.lcdportales.cl/home/">  4to I / L.C.D.P </a>
  </div>
 </footer>

</body>
</html>