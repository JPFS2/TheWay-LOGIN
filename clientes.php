<?php
include('model/conexao.php');
$lista = "SELECT * from cadcliente where Ativo <> 'N'"; 
$con = $conexao->query($lista) or die($mysqli->error);
echo $lista;








include __DIR__ . '/views/clientess.php';
include __DIR__ . '/includes/adminfooter.php';