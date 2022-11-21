<?php
	include_once(MODEL.'usuarios.php');
	
	class clientes{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function gerenciar(){
			
			$this->view = "clientes/gerenciar";
			$this->nivel = 1;

		}

		public function verificarcomprovante(){
			
			$this->view = "clientes/verificarcomprovante";
			$this->nivel = 1;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){
				$idCliente = $GLOBALS['url'][2];
			}

		}

		public function pagamentos(){
			
			$this->view = "clientes/pagamentos";
			$this->nivel = 1;

		}

		public function editar(){
			
			$this->view = "clientes/editar";
			$this->nivel = 1;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){
				$idCliente = $GLOBALS['url'][2];
				include_once('funcoes/totalQuinto.php');
			}

		}

		public function editarpacote(){
			
			$this->view = "clientes/editarpacote";
			$this->nivel = 1;

			if( isset($GLOBALS['url'][2]) && !empty($GLOBALS['url'][2]) ){
				$idCliente = $GLOBALS['url'][2];
				include_once('funcoes/totalQuinto.php');
			}

		}

		public function saques(){
			
			$this->view = "clientes/saques";
			$this->nivel = 1;

		}
	}
?>