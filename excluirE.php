<?php 
session_start();
include('model/conexao.php');

$id = filter_input(INPUT_GET,"id");
$query = "DELETE FROM cadequipa WHERE codequipa = {$id}";

if(mysqli_query($conexao, $query)){ 
    $_SESSION['aviso'] = "Excluido com sucesso";
    header("Location: equipamentos.php");   

}else{
    echo $query;
}