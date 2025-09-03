<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $para = "SEU_EMAIL_AQUI@exemplo.com"; // coloque seu e-mail aqui
    $assunto = "Nova mensagem do site Gomes TI";
    $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
    $cabecalho = "From: $email\r\n";

    if (mail($para, $assunto, $corpo, $cabecalho)) {
        echo "<h2>Mensagem enviada com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao enviar a mensagem.</h2>";
    }
}
?>
