<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // ex: smtp.gmail.com
        $mail->SMTPAuth = true;
        $mail->Username = 'rafaeeldev@gmail.com'; // Seu e-mail
        $mail->Password = 'Meuanjopanda13031998@'; // Senha de app (ver abaixo)
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom($_POST['email'], $_POST['nome']);
        $mail->addAddress('SEUEMAIL@gmail.com', 'Rafael Silva');

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Novo contato via site';
        $mail->Body = "
            <strong>Nome:</strong> {$_POST['nome']}<br>
            <strong>Email:</strong> {$_POST['email']}<br>
            <strong>Data:</strong> {$_POST['data']}<br>
            <strong>Mensagem:</strong><br>{$_POST['mensagem']}
        ";

        $mail->send();
        echo "<script>document.getElementById('mensagem-sucesso').style.display = 'block';</script>";
        echo "<script>window.location = 'index.html#contato';</script>";
    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
}
?>
