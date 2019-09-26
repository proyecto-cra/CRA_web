<?php
	include "librerias/conexion.php";
	include "Clases/Libro.php";

	$libros = array();

	$sql = "SELECT id, titulo, autor, resumen  FROM libros";
	$listar = mysqli_query($cn, $sql);

	while ($rs = mysqli_fetch_array($listar)) {

		$id = $rs["id"];
		$titulo = $rs["titulo"];
		$autor = $rs["autor"];
		$resumen = $rs["resumen"];

		$libro = new Libro($id, $titulo, $autor, $resumen);

		array_push($libros, $libro);
	}

	$totalLibros = count($libros);

	?>
		<div class="card-deck"style="margin:1%;font-family: Simplicity; font-weight: bold;">
	<?php

	$i = 0;
	while ($i < $totalLibros) { 
		
		?>
			<div class="card" >
				<img src="img/img1.png" alt="Card image cap" style=" padding: 5px;">
				<div class="card-body">
					<h5 class="card-title"style="font-weight: bold;"><?php echo $libros[$i]->getTitulo(); ?></h5>
					<h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold;"><?php echo $libros[$i]->getAutor(); ?></h6>
					<p class="card-text" style="font-size:15px;"><?php echo cortar_string($libros[$i]->getResumen(), 50).'...'; ?></p>
					<a href="Resumen.html" class="card-link">Ver Resumen</a>
					<a href="Pedir.php?libro=1" class="card-link">Pedir (1)</a>
				</div>
			</div>
		<?php
		$i++;
		if ($i%5==0) {
			?>
				</div>
				<div class="card-deck"style="margin:1%;font-family: Simplicity; font-weight: bold;">
			<?php
		}
	}

	?>
		</div>
	<?php

	function cortar_string ($string, $largo) { 
	   $marca = "<!--corte-->"; 
	 
	   if (strlen($string) > $largo) { 
	        
	       $string = wordwrap($string, $largo, $marca); 
	       $string = explode($marca, $string); 
	       $string = $string[0]; 
	   } 
	   return $string; 
	} 	
?>