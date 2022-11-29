<?php
session_start();
include('model/conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$funcao = $_POST["funcao"];
$senha = $_POST["senha"];
$codempresa = $_POST["codempresa"];
$responsavel = $_POST["responsavel"];


$sql = "UPDATE cadfunc SET nome ='$nome', email='$email', tel = $telefone, funcao = $funcao, senha = $senha, codempresa = $codempresa, responsavel = $responsavel WHERE codfunc = $codfunc";

$update = mysql_query($sql);
if ($update) {
    echo "Atualizado com sucesso!";
} else {
    echo "Erro durante a atualização. Verifique os dados!";
}
?>