<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
   <title>Informes.</title>
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
                  <a class="nav-link" href="libros.php">Volver <span class="sr-only">(current)</span></a>
               </li>
            </ul>
            <span class="navbar-text" style="font-size: 50%;">
               <em> No dejes para mañana lo que puedes leer hoy</em>
            </span>
         </div>
      </nav>


				
      <!-- Links a los informes-->
      <ul>
        <?php if ($_SESSION['cargo'] == 1 || $_SESSION['cargo'] == 2): ?>
         <li><a target="_blank" href="librerias/ClasePDF/informeUsuarios.php">Usuarios registrados</a></li>
        <?php
      </ul>

      <br>
      <br>
      <br>

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
</html>