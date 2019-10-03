<?php

	include "librerias/conexion.php";
	include "Clases/Libro.php";

	$libros = array();

	$sql = "SELECT libros.id, libros.titulo, libros.autor, libros.resumen, libros.copias, tiempo_lectura.comando, libros.imagen  FROM libros, tiempo_lectura WHERE (tiempo_lectura.id = libros.tiempo_lectura)";
	$listar = mysqli_query($cn, $sql);

	while ($rs = mysqli_fetch_assoc($listar)) {

		$id = $rs["id"];
		$titulo = $rs["titulo"];
		$autor = $rs["autor"];
		$resumen = $rs["resumen"];
		$copias = $rs["copias"];
		$tl = $rs["comando"];
		$img = $rs["imagen"];

		$libro = new Libro($id, $titulo, $autor, $resumen, $copias, $tl, $img);

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
				<?php echo "<img src='data:image/jpeg; base64," . base64_encode($libros[$i]->getImagen()) . "' id='imagenCarta' class='card-img-top' >"; ?>
				<div class="card-body">
					<h5 class="card-title"style="font-weight: bold;"><?php echo $libros[$i]->getTitulo(); ?></h5>
					<h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold;"><?php echo $libros[$i]->getAutor(); ?></h6>
					<p class="card-text" style="font-size:15px;"><?php echo cortar_string($libros[$i]->getResumen(), 50).'...'; ?></p>
					<?php echo "<a href='Resumen.php?idLibro=" . $libros[$i]->getId() . "' class='card-link'>Ver Resumen</a>"; ?>
					<?php echo "<a href='Pedir.php?libro=" . $libros[$i]->getId() . "&tl=" . $libros[$i]->getTiempoLectura() ."' class='card-link'>Pedir (".$libros[$i]->getCopias().")</a>"; ?>
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