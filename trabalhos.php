<?php

require __DIR__ . '/vendor/autoload.php';

use App\Communication\Email;


if (isset($_POST['btnEnviar']) and !empty($_POST['btnEnviar'])) {

  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $arquivo = $_FILES['arquivo']['tmp_name'];
  $endereco = 'suporte@thewaysistemas.com';
  $nome = 'Marcio Augusto';
  $candidato = 'Trabalhe Conosco';

  $assunto = 'testando envio';

   $corpo =(
   "<b>Nome:</b> ".$dados['nome'].
   "<br><b>E-mail:</b> ".$dados['email'].
   "<br><b>Telefone:</b> ".$dados['telefone'].
   "<br><br><b>Posicionamento:</b> ".$dados['posicao'].
   "<br><b>Cargo</b>: ".$dados['cargo'].
   "<br><br><b>".$dados['msg'].
   "<br><br><b>Currículo segue em anexo:</b>"
  ); // CORPO


  $obEmail = new Email;
  $sucesso = $obEmail->Enviar($assunto, $corpo, $endereco, $nome,$arquivo, $candidato);


      // CONFIRMAÇÃO DE ENVIO
      if ($sucesso == true) {

        header('Location:trabalhos.php');
        $obEmail->confirma(true);
    } else {
        $obEmail->confirma(false);
    }
  
  
}



include __DIR__ . '/views/work.php';
include __DIR__ . '/includes/footer.php';
