<?php

require __DIR__ . '/vendor/autoload.php';

use App\Communication\Email;


if (isset($_POST['btnEnviar']) and !empty($_POST['btnEnviar'])) {



    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $arquivo = '';
    $endereco = $dados['para']; //
    $nome = $dados['nome']; // destino
    $candidato = 'Fale comigo'; // quem envia
    $assunto = $dados['assunto'];

    $corpo = ("<b>Nome:</b> " . $dados['nome'] .
        "<br><br><b>Empresa:</b> " . $dados['empresa'] .
        "<br><b>E-mail:</b> " . $dados['email'] .
        "<br><b>Telefone:</b> " . $dados['telefone'] .
        "<br><br>" . $dados['msg']); // CORPO


    $obEmail = new Email;
    $sucesso = $obEmail->Enviar($assunto, $corpo, $endereco, $nome, $arquivo, $candidato);

    // CONFIRMAÇÃO DE ENVIO
    if ($sucesso == true) {

        header('Location:Sistemas.php');
        $obEmail->confirma(true);
    } else {
        $obEmail->confirma(false);
    }
  
  }

include __DIR__ . '/views/loginn.php';
include __DIR__ . '/includes/adminfooter.php';