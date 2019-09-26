<?php

	error_reporting(E_ALL ^ E_NOTICE);

	require "librerias/conexion.php";

	session_start();

	if ($_POST["btnEnviarPedido"] && $_POST["rutPedido"] != "") {

		if ($_SESSION["rut"] != "") {

			if ($_POST["rutPedido"] == $_SESSION["rut"]) {

				date_default_timezone_set('America/Santiago');
				$fecha = date("Y-m-d");

				$sql = "INSERT INTO `pedidos` (`id`, `id_usuario`, `id_encargado`, `id_libro`, `fecha_pedido`, 
				`fecha_devolucion`, `fecha_real_devolucion`, `estado`, `codigo_barras`) 
				VALUES (NULL, '".$_SESSION['id']."', NULL, '".$_SESSION['idLibro']."', '$fecha', NULL, NULL, 'pedido', NULL);";
				
				$listar = mysqli_query($cn, $sql);

				$_SESSION["idPedido"] = mysqli_insert_id($cn); //Obtenemos el ultimo id insertado.
				$fechaDevolucion = date('Y-m-d',strtotime($fecha."."));
				$codigo = $_SESSION["idPedido"].date('is');

				$sql = "UPDATE pedidos SET codigo_barras = '$codigo' WHERE id = ".$_SESSION["idPedido"];

				$listar = mysqli_query($cn, $sql);

				echo "<script>alert('Libro reservado.')</script>";
				header("Location:pdf.php");


			}else{
				echo "<script>alert('Rut incorrecto, ingrese rut nuevamente.')</script>";
				echo "<a href='Pedir.php?libro=".$_SESSION["idLibro"]."'>Volver</a>";
			}
			
		}else{
			echo "<script>alert('No has iniciado sesion.')</script>";
			echo "<a href='login.php'>Iniciar sesion.</a> <br>";
			echo "<a href='Pedir.php?libro=".$_SESSION["idLibro"]."'>Volver.</a>";
		}
		
		
	}else{
		echo "<script>alert('Llene todos los campos.')</script>";
		echo "<a href='Pedir.php?libro=".$_SESSION["idLibro"]."'>Volver</a>";
	}

?>