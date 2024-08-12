<?php

    // Captura dos valores enviados pelo formulário
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['phone']);
    $mensagem = addslashes($_POST['message']);

    // Configurações do e-mail
    $para = "leonardofs1910@gmail.com";
    $assunto = "Nova Mensagem!";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: leonardofs1910@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer: PHP/".phpversion();

    // Envio do e-mail
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>
