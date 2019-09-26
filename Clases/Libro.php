<?php 

	class Libro {

		public $id;
		public $titulo;
		public $autor;
		public $resumen;
		public $copias;

		//Constructor
		public function Libro (int $id, string $titulo, string $autor, string $resumen, int $copias) {
			$this->id = $id;
			$this->titulo = $titulo;
			$this->autor = $autor;
			$this->resumen = $resumen;
			$this->copias = $copias;
		}

		public function setId(int $id) {
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}

		public function setTitulo(string $titulo) {
			$this->titulo = $titulo;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setAutor(string $autor) {
			$this->autor = $autor;
		}

		public function getAutor(){
			return $this->autor;
		}

		public function setResumen(string $resumen) {
			$this->resumen = $resumen;
		}

		public function getResumen(){
			return $this->resumen;
		}

		public function setCopias(string $copias) {
			$this->copias = $copias;
		}

		public function getCopias(){
			return $this->copias;
		}
 
   }

?>