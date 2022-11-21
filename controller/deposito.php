<?php
	include_once(MODEL.'inicio.php');
	
	class deposito{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function depositar(){
			
			$this->view = "deposito/depositar";
			$this->nivel = 10;

		}

		public function meusdepositos(){
			
			$this->view = "deposito/meusdepositos";
			$this->nivel = 10;

		}

		public function pagar(){
			
			$this->view = "deposito/pagar";
			$this->nivel = 10;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){

				$idCliente = $GLOBALS['url'][2];	

			}

		}

		public function comprovante(){
			
			$this->view = "deposito/comprovante";
			$this->nivel = 10;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){

				$idCliente = $GLOBALS['url'][2];	

			}

		}
		
	}
?>