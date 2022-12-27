<?php

include('model/conexao.php');

$lista = "SELECT * from cadequipa"; 
$con = $conexao->query($lista) or die($mysqli->error);


$empresa = "SELECT codcli, cliente, fantasia FROM cadcliente order by cliente";

$empresas = $conexao->query($empresa) or die($mysqli->error);




include __DIR__ . '/views/equipamentoss.php';
include __DIR__ . '/includes/adminfooter.php';