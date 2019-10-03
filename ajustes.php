<?php
  include( "librerias/conexion.php");
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ajustes</title>
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
					<a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
				</li>
               <li class="nav-item active">
                  <a class="nav-link" href="libros.php">Volver <span class="sr-only">(current)</span></a>
               </li>
				<li class="nav-item active">
					<a class="nav-link" href="cerrarSesion.php">Cerrar Sesion <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<span class="navbar-text" style="font-size: 50%;">
				<em> No dejes para mañana lo que puedes leer hoy</em>
			</span>
		</div>
	</nav>

  <!-- Obtenemos los datos del usuario -->
  <?php
      if (isset($_SESSION["id"])){ // Comprobamos que la variable id no sean null (que no este vacia)

          $id= $_SESSION["id"]; // Si no esta null le asignamos el id del _SESSION a nuestro id

          $listar=mysqli_query($cn, "SELECT * FROM usuarios WHERE id='$id'"); // Obtenemos todos los datos del usuario en base al id

          while ($rs=mysqli_fetch_assoc($listar)){ // Si recibe datos, asignamos los datos a las variables que creamos.

              $nombre = $rs["nombre"];
              $apellido = $rs["apellido"];
              $telefono = $rs["telefono"];
              $contrasena = $rs["contrasena"];

          }
          
      }
  ?>

  <!-- 'Txt's -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <?php if ($_GET["e"] == 1 || $_GET["e"] == 2): ?>
                <h3 class="box-tittle">Editar mi Perfil</h3>
              <?php endif ?>
            </div>

            <!-- Formulario -->
            <form role="form" method="post" action="verificadorAjustes.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="ejemploinput">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre;?>">
                </div>
                <div class="form-group">
                  <label for="ejemploinput">Apellido</label>
                  <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido;?>">
                </div>               
                <div class="form-group">
                  <label for="ejemploinput">Teléfono</label>
                  <input type="text" name="telefono" class="form-control" placeholder="telefono" value="<?php echo $telefono;?>">
                </div>       
                <div class="form-group">
                  <label for="ejemploinput">Contraseña</label>
                  <input type="text" name="contrasena" class="form-control" placeholder="contraseña" value="<?php echo $contrasena;?>">
                </div> 
              </div>
              <div class="box-footer">
                <input type="submit" name="Actualizar" class="btn btn-primary">
              </div>
            </form>

          </div>
        </div>  
      </div>
    </section>
  </div>

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
  <?php if ($_GET["e"] == 2): ?>
    <script type="text/javascript">alert("Cambios realizados exitosamente.");</script>
  <?php endif ?>
</body>
</html>