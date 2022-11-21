<?php
	include_once(MODEL.'inicio.php');
	
	class Inicio{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function inicio(){
			
			$this->view = "inicio/inicio";
			$this->nivel = 7;

			$nivelUser = $_SESSION['nivelSession'];

			if($nivelUser >= 5){
				$this->view = "inicio/inicioCliente";
			}

		}
		
	}
?>