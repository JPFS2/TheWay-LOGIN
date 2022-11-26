<?php 
session_start();
include('model/conexao.php');

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');
$funcao = filter_input(INPUT_POST,'funcao');




if($nome && $email){
    
    $query = "INSERT INTO cadfunc(nome, dtcadastro, funcao, tel, Email) VALUES ('{$nome}',CURRENT_DATE,'{$funcao}','{$telefone}','{$email}')";
    
    if(mysqli_query($conexao, $query)){ 
        $_SESSION['aviso'] = "Cadastrado com sucesso";
        header("Location: funcionarios.php");

    }



}

  