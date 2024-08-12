<?php
    // Coleta e validação dos dados
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Configuração do e-mail
    $to = "leonardofs1910@gmail.com";
    $subject = "Novo Formulário de Contato";
    $headers = "From: $email";

    // Montagem da mensagem
    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Telefone: $phone\n";
    $email_body .= "Mensagem:\n$message\n";

    // Envio do e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    } 
?>
