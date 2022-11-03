<html>

	<head>
		<title> Envio de email </title>
		<meta charset="utf-8"> <!-- html5 -->		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- html <= 4 -->
		<meta name="author" content="Hugo Lumazzini Paiva">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="initial-scale=1">	</head>
	<body>

		<?php
			include '../../../conexao.php';
		?>

		<?php
		$nome = $_POST['nome'];
		$data_nasc = $_POST['data_nasc'];
		$sexo = $_POST['sexo'];
		$cep = $_POST['cep'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$complemento = $_POST['complemento'];		
		$rg = $_POST['rg'];
		$orgao_expedidor = $_POST['orgao_expedidor'];
		$cpf = $_POST['cpf'];
		$telefone_fixo = $_POST['telefone_fixo'];
		$telefone_celular = $_POST['telefone_celular'];
		$telefone_comercial = $_POST['telefone_comercial'];
		$email = $_POST['email'];
		$ano_conclusao = $_POST['ano_conclusao'];
		$escola = $_POST['escola'];
		$nota_enem = $_POST['nota_enem'];
		$periodo = $_POST['periodo'];
		$curso_interesse = $_POST['curso'];
		$turno = $_POST['turno'];
		
		$para_faculdade = "secretaria@faculdadeanasps.com.br";
		$para_contato = "contato@faculdadeanasps.com.br";

		//$para_faculdade = "bruesmanbruesman@hotmail.com";
		
		$assunto_faculdade = "Ingresso pelo ENEM - 2018/1";
		
		$corpo_faculdade = "Solicitação de Ingresso 2018/1 pelo ENEM";
		$corpo_faculdade .= "<br><br><strong>Nome: </strong>$nome";	
		$corpo_faculdade .= "<br><strong>Data de Nascimento: </strong>$data_nasc";
		$corpo_faculdade .= "<br><strong>Sexo: </strong>$sexo";
		$corpo_faculdade .= "<br><strong>Endereço: </strong>$endereco - <strong>Número: </strong>$numero";
		$corpo_faculdade .= "<br><strong>Bairro: </strong>$bairro";
		$corpo_faculdade .= "<br><strong>Cidade: </strong>$cidade - <strong>UF: </strong>$uf";
		$corpo_faculdade .= "<br><strong>CEP: </strong>$cep";
		$corpo_faculdade .= "<br><strong>Complemento: </strong>$complemento";
		$corpo_faculdade .= "<br><br><strong>RG: </strong>$rg - $orgao_expedidor";
		$corpo_faculdade .= "<br><strong>CPF: </strong>$cpf";
		$corpo_faculdade .= "<br><br><strong>Telefone fixo: </strong>$telefone_fixo";
		$corpo_faculdade .= "<br><strong>Telefone celular: </strong>$telefone_celular";
		$corpo_faculdade .= "<br><strong>Telefone Comercial: </strong>$telefone_comercial";
		$corpo_faculdade .= "<br><strong>E-mail: </strong>$email";	
		$corpo_faculdade .= "<br><strong>Ano de conclusão do ensino médio: </strong>$ano_conclusao <strong>em: </strong>$escola";
		$corpo_faculdade .= "<br><strong>Nota do ENEM: </strong>$nota_enem";	
		$corpo_faculdade .= "<br><br><strong>Período de Ingresso: </strong>$periodo";
		$corpo_faculdade .= "<br><strong>Curso de Interesse: </strong>$curso_interesse";
		$corpo_faculdade .= "<br><strong>Turno: </strong>$turno";	
		//para o envio em formato HTML
		$headers_faculdade = "MIME-Version: 1.0\r\n";
		$headers_faculdade .= "Content-type: text/html;charset=UTF-8\r\n";
		//endereço do remitente
		$headers_faculdade .= "From: Contato Site <contato@faculdadeanasps.com.br>\r\n";
		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_faculdade .= "Reply-To: $email \r\n";
		//endereços que receberão uma copia
		//$headers .= "Cc: email@email.com.br\r\n";
		//endereços que receberão uma copia oculta

		$para_aluno = $email;
		$assunto_aluno = "Inscrição Faculdade Anasps";
		$corpo_aluno = "<strong>Confirmação de Inscrição da Faculdade Anasps 2018/1 através da nota do ENEM</strong>";
		$corpo_aluno .= "<br><br>Prezado(a) Candidato(a) $nome.";
		$corpo_aluno .= "<br><strong>RG: </strong>$rg - $orgao_expedidor";
		$corpo_aluno .= "<br><strong>CPF: </strong>$cpf";
		$corpo_aluno .= "<br>A sua Inscrição no Processo Seletivo 1º/2018 da Faculdade Anasps foi realizada!";
		$corpo_aluno .= "<br><br><strong>Curso: </strong>$curso_interesse.";

		$corpo_aluno .= "<br><strong>Local: </strong>SCS Quadra 1, Bloco K, Lote 30, Edifício Denasa, 10º Andar, Salas 1001 a 1004, Asa Sul, Cep 70.398-900, Brasília/DF.";

		//para o envio em formato HTML
		$headers_aluno = "MIME-Version: 1.0\r\n";
		$headers_aluno .= "Content-type: text/html;
			charset=UTF-8\r\n";

		//endereço do remitente
		$headers_aluno .= "From: Faculdade ANASPS <contato@faculdadeanasps.com.br>\r\n";

		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_aluno .= "NO-REPLY\r\n";



		$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$cpf', '$email', '$telefone_fixo', '$telefone_celular', '$telefone_comercial', 
		'$data_nasc', '$sexo', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$complemento', '$rg', '$orgao_expedidor')";
		$res = mysqli_query($conexao, $sql);
		$idusuarios = mysqli_insert_id($conexao);
		$inserir = mysqli_affected_rows($conexao);

		
		$sql = "INSERT INTO inscricao_enem VALUES (null, '$idusuarios')";
		$res = mysqli_query($conexao, $sql);
		$inserir = mysqli_affected_rows($conexao);

		
	
			require ('PHPMailer/class.phpmailer.php');

			$mail = new PHPMailer();
			$mail -> IsMail();

			$mail -> SetFrom('contato@faculdadeanasps.com.br', 'ENEM');

			$mail -> AddAddress($para_faculdade, 'ENEM');
			$mail -> AddCC($para_contato, 'ENEM');
			$mail -> Subject = $assunto_faculdade;

			$mail -> MsgHTML($corpo_faculdade);

				if ($mail -> Send()) {

					$mail = new PHPMailer();
					$mail -> IsMail();
					$mail -> CharSet = 'UTF-8';

					$mail -> SetFrom('contato@faculdadeanasps.com.br', 'Inscrição Vestibular');

					$mail -> AddAddress($para_aluno, 'Inscrição Confirmada');
					$mail -> Subject = $assunto_aluno;

					$mail -> MsgHTML($corpo_aluno);

					if ($mail -> Send()) {
						echo "<script type='text/javascript'>window.alert('" . $nome . "! Inscrição realizada com sucesso!');</script>";
						echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../../../presencial.php">';
					} else {
						echo "<script type='text/javascript'>window.alert('" . $nome . "! Sua inscrição NÃO foi realizada! Por favor, tente novamente');</script>";
						echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../enem.html">';
					}
				}

				else{
					echo "<script type='text/javascript'>window.alert('" . $nome . "! Sua inscrição NÃO foi realizada! Por favor, tente novamente');</script>";
					echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=ficha_vestibular_tradicional.php">';
				}

				mysqli_close($conexao);
		
		?>
	</body>
</html>