<?php

	include 'librerias/conexion.php';

	session_start();

	$id= $_SESSION["id"];

	if($_POST['Actualizar']){

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$telefono=$_POST['telefono'];
		$contrasena=$_POST['contrasena'];

		$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido',telefono='$telefono', contrasena='$contrasena' WHERE  id='$id'";
		$sql=mysqli_query($cn, $sql);

		header("Location:ajustes.php?e=2");

	}

	

?>