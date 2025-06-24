<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome     = strip_tags($_POST['nome']);
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $data     = $_POST['data'];
    $mensagem = strip_tags($_POST['mensagem']);

    $to      = "SEUEMAIL@SEUDOMINIO.com"; // <-- Coloque seu e-mail aqui
    $subject = "Novo Agendamento de Reunião";
    $body    = "Nome: $nome\nEmail: $email\nData: $data\nMensagem: $mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem. Tente novamente.'); window.history.back();</script>";
    }
}
?>
