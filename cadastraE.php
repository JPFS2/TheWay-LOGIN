<?php 
session_start();
include('model/conexao.php');

$nome = filter_input(INPUT_POST,'nome');
$tipoequipa = filter_input(INPUT_POST,'tipoequipa');
$funcao = filter_input(INPUT_POST,'funcao');
$localizacao = filter_input(INPUT_POST,'localizacao');
$empresa = filter_input(INPUT_POST,'empresa');
$senha = filter_input(INPUT_POST,'senha');
$acesso = filter_input(INPUT_POST,'acesso');
$tipoacesso = filter_input(INPUT_POST,'tipoacesso');
$ip = filter_input(INPUT_POST,'ip');
$tipoacesso = filter_input(INPUT_POST,'tipoacesso');

if($nome){
    
    $query = "INSERT INTO cadequipa(nome, tipoequipa, funcao,localizacao, empresa, senha, acesso, tipoacesso, ip) VALUES ('{$nome}','{$tipoequipa}','{$funcao}','{$localizacao}','{$empresa}',{$senha},'{$acesso}','{$tipoacesso}','{$ip}')";
    
    if(mysqli_query($conexao, $query)){ 
        $_SESSION['aviso'] = "Cadastrado com sucesso";
        header("Location: equipamentos.php");

    }
    echo $query;


}