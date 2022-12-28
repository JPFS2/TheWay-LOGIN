<?php
include('model/conexao.php');

$pesquisa = filter_input(INPUT_POST,'pesquisa');
$bloqueado = filter_input(INPUT_POST,'responsavel');




if(!isset($pesquisa)){
    $pesquisa = "";
}

if(!isset($bloqueado)){
    $bloqueado = 'N';
}

$lista = "SELECT * from cadcliente where Bloqueado = '{$bloqueado}' and ativo <> 'N' and (cliente like '%{$pesquisa}%' or cnpj like '{$pesquisa}%')"; 



$con = $conexao->query($lista) or die($mysqli->error);


include __DIR__ . '/views/clientess.php';
include __DIR__ . '/includes/adminfooter.php';