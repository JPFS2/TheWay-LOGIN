<?php
	include_once ("dbconnect.php");
	include_once ("funcoes/criptaSenha.php");
	
	class UsuariosModel extends dbconnect{
		
		public $retorno;
		

		public function cadastrar($nome, $login,  $senha, $nivel){

			$senha = criptaSenha($senha);

			$this->retorno = mysqli_query($this->con, "INSERT INTO `usuarios`(`nome`, `login`, `senha`, `nivel`, `ativo`) VALUES ('$nome', '$login','$senha','$nivel', '1')") or die(mysqli_error($this->con));

			return $this->retorno;

		}

		public function buscar(){

			$this->retorno = mysqli_query($this->con, "SELECT * FROM usuarios ");

			return $this->retorno;

		}

		public function buscarDados($id){

			$this->retorno = mysqli_query($this->con, "SELECT * FROM usuarios WHERE id = $id");

			return $this->retorno;

		}	

		public function editar($id, $nome, $login, $nivel){

			$this->retorno = mysqli_query($this->con, "UPDATE `usuarios` SET `nome`='$nome', `login`='$login',  `nivel`='$nivel' WHERE id = $id");

			return $this->retorno;

		}

		public function deletar($id){

			$this->retorno = mysqli_query($this->con, "UPDATE `usuarios` SET `ativo`= 0 WHERE id = $id");

			return $this->retorno;

		}

		public function ativar($id){

			$this->retorno = mysqli_query($this->con, "UPDATE `usuarios` SET `ativo`= 1 WHERE id = $id");

			return $this->retorno;

		}

		
	}

?>