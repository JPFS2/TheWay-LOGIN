<?php 
session_start();
include('model/conexao.php');

$id = filter_input(INPUT_GET,"id");
$query = "DELETE FROM cadfunc WHERE codfunc = {$id}";

if(mysqli_query($conexao, $query)){ 
    $_SESSION['aviso'] = "Excluido com sucesso";
    header("Location: funcionarios.php");   

}else{
    echo $query;
}