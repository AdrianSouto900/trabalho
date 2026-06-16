<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $destinatario = "adriansouto1610@gmail.com";
    $assunto = "Contato pelo Currículo Online";

    $conteudo =
    "Nome: $nome\n".
    "Email: $email\n\n".
    "Mensagem:\n$mensagem";

    $headers = "From: $email";

    if(mail($destinatario, $assunto, $conteudo, $headers)){

        echo "
        <h2>Mensagem enviada com sucesso!</h2>
        <a href='index.html'>Voltar</a>
        ";

    }else{

        echo "
        <h2>Erro ao enviar mensagem.</h2>
        <a href='index.html'>Voltar</a>
        ";

    }
}
?>