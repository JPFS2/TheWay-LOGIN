<?php
session_start();
include('model/conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$funcao = $_POST["funcao"];
$senha = $_POST["senha"];
$id = $_POST["id-curso"];
$empresa = $_POST["empresa"];

$query = "UPDATE cadfunc SET nome ='{$nome}', email='{$email}', funcao = '{$funcao}', senha = '{$senha}', codempresa = {$empresa} WHERE codfunc={$id}";

//echo $empresa."<br>".$query;

if (mysqli_query($conexao, $query)) {
    $_SESSION['aviso'] = "Atualizado com sucesso!";
   header("Location: funcionarios.php");   
  
} else {
    $_SESSION['aviso'] = "Erro durante a atualização. Verifique os dados!".'<br>';
    echo $query;
    header("Location: funcionarios.php");   
}

?>