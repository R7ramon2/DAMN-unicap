<?php

$tipo = $_GET['tipo'];

$nome = $_POST['name'];
$assunto = $_POST['subject'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

if ($tipo == "contato") {
	$to = 'contato@faculdadeunicap.com.br';
}
elseif($tipo == "ouvidoria"){
	$to = 'ouvidoria@faculdadeunicap.com.br';
}
else{
	$to = 'contato@faculdadeunicap.com.br';
}

$to      = 'contato@faculdadeunicap.com.br';
$subject = $assunto;
$message = "Nova mensagem de: $nome";
$message .= "Email: $email";
$message .= "Mensagem: $mensagem";
$headers = 'From: contato@faculdadeunicap.com.br' . "\r\n" .
    'Reply-To: secretaria@faculdadeunicap.com.br' . "\r\n" .
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