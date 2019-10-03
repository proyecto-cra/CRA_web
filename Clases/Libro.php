<?php 

	class Libro {

		// Atributos
		public $id;
		public $titulo;
		public $autor;
		public $resumen;
		public $copias;
		public $tiempoLectura;
		public $imagen;

		// Constructor
		public function Libro (int $id, string $titulo, string $autor, string $resumen, int $copias, $tiempoLectura, $imagen) {
			$this->id = $id;
			$this->titulo = $titulo;
			$this->autor = $autor;
			$this->resumen = $resumen;
			$this->copias = $copias;
			$this->tiempoLectura = $tiempoLectura;
			$this->imagen = $imagen;
		}

		// Getters
		public function getId(){
			return $this->id;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function getAutor(){
			return $this->autor;
		}

		public function getResumen(){
			return $this->resumen;
		}

		public function getCopias(){
			return $this->copias;
		}

		public function getTiempoLectura(){
			return $this->tiempoLectura;
		}

		public function getImagen(){
			return $this->imagen;
		}
 
   }

?>