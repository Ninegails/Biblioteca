<?php
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.nomedoseudominio.com"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'ninegails.com'; # Usuário de e-mail
$mail->Password = 'senha'; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = "gppires9@gmail.com"; # Seu e-mail
$mail->FromName = "Guilherme Pires"; // Seu nome

# Define os destinatário(s)
$mail->AddAddress($email); # Os campos podem ser substituidos por variáveis
#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

# Define a mensagem (Texto e Assunto)
$mail->Subject = "Usuário e senha cadastrados no sistema da biblioteca"; # Assunto da mensagem
$mail->Body = $email, $senha;
$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";

# Envia o e-mail
$enviado = $mail->Send();
?>