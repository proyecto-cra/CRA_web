<?php
	
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "bdcra";

	$cn = mysqli_connect($server, $user, $pass, $bd);
	mysqli_query($cn ,"SET NAMES 'utf8'");

	if (!$cn) {
		die("Error al conectarse a la bd.");
	}

?>