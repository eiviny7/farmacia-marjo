<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Defina o e-mail para o qual deseja enviar a mensagem
    $to = "cenasdevinny@gmail.com"; // Substitua pelo e-mail de destino
    
    // Dados do formulário
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Assunto do e-mail
    $subject = "Nova mensagem de contato";

    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "Telefone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Mensagem:\n$message\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}

