<?php

  session_start();
  
  $_SESSION["idLibro"] = $_GET["libro"];

?>

<!DOCTYPE html>
<html>
<head>
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
   <style type="text/css">
 .exterior{
  display: inline-block;
  width: 40%; 
  height:20%;
  font-size: 200%;
  background-color:#00091e;
  margin-top: 3%;
  border-radius: 10%;
 }

 .interior{
 
   padding-right:40%;
  font-size: 100%;
  width: 15%;

  margin-top:%;
  background-color:#00091e;
  color: #7daae6;
 }
  .btn {
  background-color: #7daae6; /* Green */
  border: none;
  color: #00091e;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding-top:2%; 
  padding-bottom:2%;
  padding-left:7%;
  padding-right:7%;
  font-size: 100%;
 }
</style>
<title>Pedir libro</title>
</head>
<body style="background-color: #7daae6; font-family: simplicity;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#00091e; font-family: simplicity; font-size:30px; ">
  <a class="navbar-brand" href="libros.php"><img src="img/logo.png" style="width: 80px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <span class="navbar-text" style="font-size: 50%;">
     <em> No dejes para mañana lo que puedes leer hoy</em>
    </span>
  </div>
 </nav>
<center>
  <h1><br><strong>Pedir Libro</h1></strong>

<form action="verificadorPedido.php" method="post">
  <div class="exterior">
  <div class="interior">
    <center>
      
  <br>Rut:<input style="color:#000" type="text" name="rutPedido" placeholder="12.345.678-9" size="14"/><br>
  <br>

    </center>
  </div>

  <center> 
  <input type="submit" name="btnEnviarPedido" value="Obtener mi código" class="btn"><br><br>
  <button class="btn"><a href="libros.php" style= "color: #00091e;"> Volver atrás.</a></button><br><br>
  </div>
</form>

<center>
  
<h2> 
<strong><br>Recuerda que tu código no reserva, guarda o asegura tu libro<br> para hacer válida tu petición, deber asistir al CRA y presentarlo.<br>Recién en ese momento, tu pedido es concretado como tal.<br><br></strong>
</h2>

</center>
</center>
</center>

  <?php 




   ?>
<footer class="page-footer font-small pt-4" style="color: #7daae6; background-color: #00091e; font-family: simplicity; font-size: 130%;">
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
</body>
</html>