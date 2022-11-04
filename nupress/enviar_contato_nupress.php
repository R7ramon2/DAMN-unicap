<?php

$nome = $_POST['name'];
$assunto = $_POST['subject'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

$to      = 'teste@teste.com.br';
$subject = $assunto;
$message = "Nova mensagem de: $nome";
$message .= "Email: $email";
$message .= "Mensagem: $mensagem";
$headers = 'From: contato@teste.com.br' . "\r\n" .
    'Reply-To: secretaria@teste.com.br' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){

	echo "<script type='text/javascript'>window.alert('" . $nome . ", Contato enviado com sucesso! Aguarde nosso retorno');</script>";
	header('Refresh: 3; url=../../presencial.php');

}
else {
	echo "<script type='text/javascript'>window.alert('" . $nome . ", Erro ao enviar contato! por favor, tente novamente');</script>";
	header('Refresh: 3; url=contato.html');
}


?> 