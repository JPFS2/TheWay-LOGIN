<?php

include('model/conexao.php');

$lista = "SELECT * from cadfunc"; 
$con = $conexao->query($lista) or die($mysqli->error);

$empresa = "SELECT codcli, cliente, fantasia FROM cadcliente order by cliente";

$empresas = $conexao->query($empresa) or die($mysqli->error);

$pesquisa = filter_input(INPUT_POST,'pesquisa');
if(!isset($pesquisa)){$pesquisa = "";}
$lista = "SELECT cadfunc.*, cadcliente.cliente from cadfunc JOIN cadcliente on cadfunc.codempresa = cadcliente.codcli where cadcliente.fantasia like '%{$pesquisa}%' order by codempresa"; 
$con = $conexao->query($lista) or die($mysqli->error);


include __DIR__ . '/views/funcionarioss.php';
include __DIR__ . '/includes/adminfooter.php';