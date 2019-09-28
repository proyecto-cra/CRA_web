<?php

	error_reporting(E_ALL ^ E_NOTICE);

	require "librerias/conexion.php";

	$rut = $_POST["rut"];
	$contra = $_POST["contra"];

    // Si el input de login.php es presionado
	if ($_POST["btnEnviar"] && $rut != "" && $contra != "") {

		$sql = "SELECT id, rut, cargo FROM usuarios WHERE rut = $rut AND contrasena = $contra";

		$listar = mysqli_query($cn, $sql);

		if (mysqli_num_rows($listar) > 0) {

		    while($rs = mysqli_fetch_assoc($listar)) {
		        
		    	session_start();

		    	$_SESSION["id"] = $rs["id"];
		    	$_SESSION["rut"] = $rs["rut"];
		    	$_SESSION["cargo"] = $rs["cargo"];

		    	header('location:libros.php');

		    }
		} else {
		    echo "<script>alert('Datos incorrectos, ingrese nuevamente.')</script>";
		    echo "<a href='login.php'>Volver</a>";
		}

	}else{
		echo "<script>alert('Llene todos los campos.')</script>";
		echo "<a href='login.php'>Volver</a>";
	}

?>