<?php

	session_start();

	session_unset();
	session_destroy();


	echo "<a href='index.html'>Volver al menu Principal</a>";

	echo "<script>alert('Sesion Cerrada Correctamente')</script>";

?>