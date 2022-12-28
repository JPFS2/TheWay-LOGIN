<?php

include('model/conexao.php');

$pesquisa = filter_input(INPUT_POST,'pesquisa');
if(!isset($pesquisa)){$pesquisa = "";}

$lista = "SELECT cadequipa.*, cadcliente.cliente from cadequipa JOIN cadcliente on cadequipa.empresa = cadcliente.codcli where cadcliente.fantasia like '%{$pesquisa}%'"; 
$con = $conexao->query($lista) or die($mysqli->error);

  

$empresa = "SELECT codcli, cliente, fantasia FROM cadcliente order by cliente";

$empresas = $conexao->query($empresa) or die($mysqli->error);




include __DIR__ . '/views/equipamentoss.php';
include __DIR__ . '/includes/adminfooter.php';