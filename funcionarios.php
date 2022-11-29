<?php

include('model/conexao.php');

$lista = "SELECT * from cadfunc"; 
$con = $conexao->query($lista) or die($mysqli->error);

$empresa = "SELECT codcli, cliente, fantasia FROM cadcliente order by cliente";

$empresas = $conexao->query($empresa) or die($mysqli->error);

$pesquisa = filter_input(INPUT_POST,'pesquisa');
if(!isset($pesquisa)){$pesquisa = "";}
$lista = "SELECT * from cadfunc where nome like '%{$pesquisa}%'"; 
$con = $conexao->query($lista) or die($mysqli->error);


include __DIR__ . '/views/funcionarioss.php';
include __DIR__ . '/includes/adminfooter.php';