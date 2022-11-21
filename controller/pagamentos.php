<?php
	include_once(MODEL.'inicio.php');
	
	class pagamentos{
		
		public $view;
		public $nivel;
		public $resultado;
		

		public function pagar(){
			
			$this->view = "pagamentos/pagar";
			$this->nivel = 10;

		}

	}
?>