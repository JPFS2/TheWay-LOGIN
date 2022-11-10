<?php ob_start();

$verifica = $_POST['verifica'];
if(empty($verifica)){
	header('Location: index.php');
}
echo("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><br /><br />");

$para = "contato@thewaysistemas.com";
$nome = $_POST['texto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$descrisao = $_POST['descrisao'];
$data = date("d/m/Y");
$subject = "MeFazUmSite - Contato de: ".$nome;
$message = '<tt><br><br><b>DATA DA SOLICITA&Ccedil;&Atilde;O: </b>'.$data.
'<center>'.'<table border="0" cellpadding="0" cellspacing="0">
<tr><td width="80">Nome: </td><td><b>'.$nome.'</b></td><br></tr>'.
'<tr><td>Telefone: </td><td><b>'.$telefone.'</b></td></tr>'.
'<tr><td>E-mail: </td><td><b>'.$email.'</b></td></tr>'.
'</table>'.'<br><table border="0" cellpadding="0" cellspacing="0"><tr><td><center>Descri&ccedil;&atilde;o</center></td></tr><tr><td><b>'.$descrisao.'</b></td></tr></table></center></tt>' ;

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";

$headers .= "To: MeFazUmSite <".$para.">\r\n"; // Nome e email do que vai receber o email
$headers .= "From: ".$nome." <".$email.">\r\n";

if(mail($para, $subject, $message, $headers)) {
	header('Location: ../index.php'); // Sucesso
} else {
	header('Location: ../erro.html'); // Falha
}
 
ob_end_flush(); 