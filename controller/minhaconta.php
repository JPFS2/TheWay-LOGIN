<?php
	include_once(MODEL.'inicio.php');
	
	class minhaconta{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function meuperfil(){
			
			$this->view = "minhaconta/meuperfil";
			$this->nivel = 10;

		}

		public function enviardocumentos(){
			
			$this->view = "minhaconta/enviardocumentos";
			$this->nivel = 10;

		}

		public function seguranca(){
			
			$this->view = "minhaconta/seguranca";
			$this->nivel = 10;

		}
		
		public function contabancaria(){
			
			$this->view = "minhaconta/contabancaria";
			$this->nivel = 10;

		}
	}
?>