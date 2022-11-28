<?php
include('model/conexao.php');
$pesquisa = filter_input(INPUT_POST,'pesquisa');
if(!isset($pesquisa)){$pesquisa = "";}
$lista = "SELECT * from cadcliente where cliente like '%{$pesquisa}%' and Ativo <> 'N'"; 
$con = $conexao->query($lista) or die($mysqli->error);





include __DIR__ . '/views/clientess.php';
include __DIR__ . '/includes/adminfooter.php';