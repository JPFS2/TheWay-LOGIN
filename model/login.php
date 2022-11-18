<?php
	include_once ("dbconnect.php");
	include_once ("funcoes/criptaSenha.php");
	include_once ("funcoes/firewall.php");

	class LoginModel extends dbconnect{

		public $retorno;

		public function verificaLogado($user, $senha){

			$Firewall = new Firewall(); 
			$Firewall->SecureUris();
			
			$user = $Firewall->getClean($user);
			$senha = $Firewall->getClean($senha);

			$sql = mysqli_query($this->con, "SELECT senha FROM usuarios WHERE login = '$user' and ativo = 1");

			if(mysqli_num_rows($sql) != 0){
				
				$row = mysqli_fetch_object($sql);

				if($row->senha == $senha){
					return TRUE;
				}else{
					session_destroy();
					session_unset();
					header("Location: ".SITE."login/erro");
				}
			}else{
				session_destroy();
				session_unset();
				header("Location: ".SITE."login/erro");
			}
			
		}
		
		
		public function logar($user, $senha) {

			$Firewall = new Firewall(); 
			$Firewall->SecureUris();
			
			$user = $Firewall->getClean($user);
			$senha = $Firewall->getClean($senha);


			$sql = mysqli_query($this->con, "SELECT id, nome, login, senha, nivel FROM usuarios WHERE login = '$user' and ativo = 1");
		
			if(mysqli_num_rows($sql) != 0){

			 	$senha = criptaSenha($senha);

				$row = mysqli_fetch_assoc($sql);

				if($row['senha'] === $senha){

					$_SESSION['idSession'] = $row['id'];
			        $_SESSION['nomeSession'] = $row['nome'];
			        $_SESSION['userSession'] = $row['login'];
			        $_SESSION['senhaSession'] = $row['senha'];
			        $_SESSION['nivelSession'] = $row['nivel'];
					
					header("Location: ".SITE."inicio");

				}else{
					header("Location: ".SITE."login/erro");
				}
				
			 }else{
			 	header("Location: ".SITE."login/erro");
			 }
			
		}

		public function cadastrarsucesso($dados) {

			extract($dados);

			$Firewall = new Firewall(); 
			$Firewall->SecureUris();
			
			$login = $Firewall->getClean($idUser);
			$senha = $Firewall->getClean($senha);
			$nome = $Firewall->getClean($nome);
			$email = $Firewall->getClean($email);
			$contato1 = $Firewall->getClean($contato1);


			$senha = criptaSenha($senha);

			$this->retorno[] = mysqli_query($this->con, "INSERT INTO `usuarios`(`nome`, `login`, `senha`, `nivel`, `ativo`) VALUES ('$nome', '$login', '$senha', 10, 1)");
			$recuperarId = mysqli_insert_id($this->con);

			$this->retorno[] = mysqli_query($this->con, "INSERT INTO `clientes`(`idUser`, `email`, `contato1`, `dataCadastro`, `ativo`) VALUES ('$recuperarId','$email', '$contato1', NOW(), 1)");

			return $this->retorno;

		}
		
	}

?>