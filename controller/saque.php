<?php
	include_once(MODEL.'inicio.php');
	
	class saque{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function saque(){
			
			$this->view = "saque/saque";
			$this->nivel = 10;

		}

		public function meussaques(){
			
			$this->view = "saque/meussaques";
			$this->nivel = 10;

		}

		public function pagar(){
			
			$this->view = "saque/pagar";
			$this->nivel = 10;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){

				$idCliente = $GLOBALS['url'][2];	

			}

		}

		public function comprovante(){
			
			$this->view = "saque/comprovante";
			$this->nivel = 10;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){

				$idCliente = $GLOBALS['url'][2];	

			}

		}
		
	}
?>