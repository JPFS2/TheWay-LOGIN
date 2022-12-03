<?php
session_start();
include('model/conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$funcao = $_POST["funcao"];
$senha = $_POST["senha"];
$id = $_POST["id-curso"];


$query = "UPDATE cadfunc SET nome ='{$nome}', email='{$email}', funcao = '{$funcao}', senha = '{$senha}' WHERE codfunc={$id}";


if (mysqli_query($conexao, $query)) {
    $_SESSION['aviso'] = "Atualizado com sucesso!";
    header("Location: funcionarios.php");        
} else {
    $_SESSION['aviso'] = "Erro durante a atualização. Verifique os dados!".'<br>';
    echo $query;
    header("Location: funcionarios.php");   
}
?>