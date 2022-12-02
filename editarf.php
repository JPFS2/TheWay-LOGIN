<?php
session_start();
include('model/conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$funcao = $_POST["funcao"];
$senha = $_POST["senha"];
$lista = ["codfunc"];


$sql = "UPDATE cadfunc SET nome ='$nome', email='$email', funcao = $funcao, senha = $senha WHERE nome ='$nome', email='$email', funcao = $funcao, senha = $senha ";

$update = mysqli_query($sql);
if ($update) {
    echo "Atualizado com sucesso!";             
} else {
    echo "Erro durante a atualização. Verifique os dados!";
}
?>