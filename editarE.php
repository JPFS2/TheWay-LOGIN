<?php
session_start();
include('model/conexao.php');

$id = $_POST["id-curso"];

$nome = filter_input(INPUT_POST,'recipient-name');
$tipoequipa = filter_input(INPUT_POST,'tipoequipa');
$localizacao = filter_input(INPUT_POST,'localizacao');
$empresa = filter_input(INPUT_POST,'empresa');
$senha = filter_input(INPUT_POST,'senha');
$acesso = filter_input(INPUT_POST,'acesso');
$tipoacesso = filter_input(INPUT_POST,'tipoacesso');
$ip = filter_input(INPUT_POST,'ip');


$query = "UPDATE cadequipa SET nome ='{$nome}', ip='{$ip}',acesso='{$acesso}', tipoacesso='{$tipoacesso}' , tipoequipa='{$tipoequipa}', localizacao = '{$localizacao}', senha = '{$senha}', empresa = {$empresa} WHERE codequipa={$id}";

//echo $empresa."<br>".$query;

if (mysqli_query($conexao, $query)) {
    $_SESSION['aviso'] = "Atualizado com sucesso!";
   header("Location: equipamentos.php");   
  
} else {
    $_SESSION['aviso'] = "Erro durante a atualização. Verifique os dados!".'<br>';
    echo $query;
    header("Location: equipamentos.php");   
}

?>