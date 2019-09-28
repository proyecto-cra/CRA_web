<?php 
	
	require 'librerias/conexion.php';
	$idFoto = (isset($_GET["id"])) ? $_GET["id"] : exit();

	$sql = "SELECT * FROM libros WHERE id = '". $idFoto."'";
	$listar = msqli_query($cn, $sql);
	$datos = mysqli_fetch_assoc($listar);

	$imagen = $datos['imagen'];

	header("Content-Type: jpg");

	echo $imagen;

?>