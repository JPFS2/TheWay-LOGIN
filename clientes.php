<?php
include('model/conexao.php');

$pesquisa = filter_input(INPUT_POST,'pesquisa');

if(!isset($pesquisa)){
    $pesquisa = "";
}

$lista = "SELECT * from cadcliente where Ativo <> 'N' and (cliente like '%{$pesquisa}%' or cnpj like '{$pesquisa}%')"; 
$con = $conexao->query($lista) or die($mysqli->error);


include __DIR__ . '/views/clientess.php';
include __DIR__ . '/includes/adminfooter.php';