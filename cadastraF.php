<?php 
session_start();
include('model/conexao.php');

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');
$funcao = filter_input(INPUT_POST,'funcao');
$senha = filter_input(INPUT_POST,'senha');
$codempresa = filter_input(INPUT_POST,'empresa');
$responsavel = filter_input(INPUT_POST,'responsavel');

if(!isset($responsavel)){
    $responsavel = 'N';
}

if($nome && $email){
    
    $query = "INSERT INTO cadfunc(nome, dtcadastro, funcao, tel, Email, senha, codempresa, responsavel) VALUES ('{$nome}',CURRENT_DATE,'{$funcao}','{$telefone}','{$email}','{$senha}',{$codempresa},'{$responsavel}')";
    
    if(mysqli_query($conexao, $query)){ 
        $_SESSION['aviso'] = "Cadastrado com sucesso";
        header("Location: funcionarios.php");   

    }else{
        echo $query;
    }

}

