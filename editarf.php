<?php
session_start();
include('model/conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$funcao = $_POST["funcao"];
$senha = $_POST["senha"];
$lista = ["codfunc"];


$sql = "UPDATE cadfunc SET nome ='$nome', email='$email', funcao = $funcao, senha = $senha WHERE nome ='$nome', email='$email', funcao = $funcao, senha = $senha ";
echo $sql;
?>