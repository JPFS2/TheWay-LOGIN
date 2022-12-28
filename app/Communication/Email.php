<?php

namespace App\Communication;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\SMTP;


class Email
{
    private $confirmado;

    // CREDENCIAIS DE ACESSO SMTP
    const HOST      = '162.241.135.156';
    const USER      = 'contato@thewaysistemas.com';
    const PASS      = 'ma20021978123';
    const SECURE    =  'tls';
    const PORT      = '587';
    const CHARSET   = 'UTF-8';

    // DADOS DO REMETENTE
    const FROM_EMAIL = 'contato@thewaysistemas.com';
   // const FROM_NAME  = 'Conta de envio';


    // 1 endereço para onde será enviado
    // 2 assunto do email
    // 3 corpo do email
    public function Enviar($assunto, $corpo, $email, $nome, $arquivo = [], $candidato)
    {

        $mail = new PHPMailer(true);

        try {

            //Server settings 
            $mail->CharSet = 'UTF-8';
            $mail->SMTPAuth   = true;
            $mail->isSMTP();

            $mail->Host       = self::HOST;
            $mail->Username   = self::USER;
            $mail->Password   = self::PASS;
            $mail->SMTPSecure = self::SECURE;
            $mail->Port       = self::PORT;

            // DESTINATARIO
            $mail->setFrom(self::FROM_EMAIL, $candidato); // QUEM ESTÁ ENVIANDO
            $mail->addAddress($email, $nome);  // QUEM ESTÁ RECEBENDO  

            //ANEXO
            if (!empty($arquivo)) :
                $arquivo = is_array($arquivo) ? $arquivo : [$arquivo];
                foreach ($arquivo as $arq) {
                    $mail->addAttachment($arq);
                }
            endif;

            // CONTEÚDO
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body    = $corpo;

            $mail->send();
            return true;
        } catch (PHPMailerException $e) {

            return false;
        }
    }

    public function confirma($confirmando){ // CONFIRMANDO SE FOI OU NÃO ENVIADO

    $this->confirmado = $confirmando;

    return $this->confirmado;

    }
}
