<?php

include('model/conexao.php');

$lista = "SELECT * from cadfunc"; 
$con = $conexao->query($lista) or die($mysqli->error);



include __DIR__ . '/views/funcionarioss.php';
include __DIR__ . '/includes/adminfooter.php';