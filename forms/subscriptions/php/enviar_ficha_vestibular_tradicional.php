<html>

	<head>
		<title> Envio de email </title>
		<meta charset="utf-8">
		<!-- html5 -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- html <= 4 -->
		<meta name="author" content="Hugo Lumazzini Paiva">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="initial-scale=1">

	</head>
	<body>

		<?php
			include '../../../conexao.php';
		?>

		<?php

		$vestibular = "2/2018";
		//$data_prova = "050817";

		$nome = $_POST['nome'];

		echo "<script type='text/javascript'>window.alert('" . $nome . ", processando sua inscrição, por favor, aguarde');</script>";

		$data_nasc = $_POST['data_nasc'];
		$sexo = $_POST['sexo'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$cep = $_POST['cep'];
		$complemento = $_POST['complemento'];

		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$orgao_expedidor = $_POST['orgao_expedidor'];
		//$password = $_POST['senha'];

		$telefone_fixo = $_POST['telefone_fixo'];
		$telefone_celular = $_POST['telefone_celular'];
		$email = $_POST['email'];

		$ano_conclusao = $_POST['ano_conclusao'];
		$escola = $_POST['escola'];
		$tipoescola = $_POST['tipo-escola'];
		$turno = $_POST['turno'];
		$curso_interesse = $_POST['curso'];
		$portador_necessidades_especiais = $_POST['portador_necessidades_especiais'];
		if($portador_necessidades_especiais == "Sim"){
		    $qual_necessidade = $_POST['qual_necessidade'];
		}
		$atendimento_necessidades_especiais = $_POST['atendimento_necessidades_especiais'];
		if($atendimento_necessidades_especiais == "Sim"){
		   	$qual_atendimento = $_POST['qual_atendimento'];
		}
		$mao = $_POST['mao'];
		$telefone_comercial = '0';
		$periodo = "2/2018";

		$hora_desejada = $_POST['hora_desejada'];
		if($hora_desejada == "0"){
			$hora_desejada = "Data não especificada, entrar em contato";
		}

		$para_faculdade = "secretaria@faculdadeanasps.com.br";
		$para_contato = "contato@faculdadeanasps.com.br";
		//$para_faculdade = "bruesmanbruesman@hotmail.com";

		$assunto_faculdade = "Nova Inscricao VESTIBULAR TRADICIONAL 2018/2";
		$corpo_faculdade = "Solicitação de Vestibular Tradicional";
		$corpo_faculdade .= "<br><br><strong>Nome: </strong>$nome";
		$corpo_faculdade .= "<br><strong>Data de Nascimento: </strong>$data_nasc";
		$corpo_faculdade .= "<br><strong>Sexo: </strong>$sexo";
		$corpo_faculdade .= "<br><strong>Endereço: </strong>$endereco - <strong>Número: </strong>$numero";
		$corpo_faculdade .= "<br><strong>Bairro: </strong>$bairro";
		$corpo_faculdade .= "<br><strong>Cidade: </strong>$cidade - <strong>UF: </strong>$uf";
		$corpo_faculdade .= "<br><strong>CEP: </strong>$cep";
		$corpo_faculdade .= "<br><strong>Complemento: </strong>$complemento";

		$corpo_faculdade .= "<br><strong>RG: </strong>$rg - $orgao_expedidor";
		$corpo_faculdade .= "<br><strong>CPF: </strong>$cpf";

		$corpo_faculdade .= "<br><strong>Telefone Fixo: </strong>$telefone_fixo";
		$corpo_faculdade .= "<br><strong>Telefone Celular: </strong>$telefone_celular";
		$corpo_faculdade .= "<br><strong>E-mail: </strong>$email";

		$corpo_faculdade .= "<br><strong>Ano de Conclusão do Ensino Médio: </strong>$ano_conclusao em $escola";
		$corpo_faculdade .= "<br><strong>Escola: </strong>$tipoescola";

		$corpo_faculdade .= "<br><strong>Curso de Interesse: </strong>$curso_interesse";
		$corpo_faculdade .= "<br><strong>Turno: </strong>$turno";

		$corpo_faculdade .= "<br> Data: <strong>$hora_desejada</strong>";
		$corpo_faculdade .= "<br><strong>Destro ou canhoto: </strong>$mao";
		$corpo_faculdade .= "<br><strong>Portador de Necessidades Especiais: </strong>$portador_necessidades_especiais";
  $corpo_faculdade .= "<br><strong>Qual: </strong>$qual_necessidade";
  $corpo_faculdade .= "<br><strong>Atendimento Especial </strong>$atendimento_necessidades_especiais";
  $corpo_faculdade .= "<br><strong>Qual: </strong>$qual_atendimento";

		//		if ($necessidades != "nao") {
		//			$corpo_faculdade .= "<br><br><strong>ATENÇÃO - Aluno é portador de necessidades especiais</strong>";
		//		}

		//para o envio em formato HTML
		$headers_faculdade = "MIME-Version: 1.0\r\n";
		$headers_faculdade .= "Content-type: text/html;
			charset=UTF-8\r\n";

		//endereço do remitente
		$headers_faculdade .= "From: Contato Site <contato@faculdadeanasps.com.br>\r\n";

		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_faculdade .= "Reply-To: $email \r\n";

		//Confirmação para o aluno
		$para_aluno = $email;
		$assunto_aluno = "Inscrição Faculdade Anasps";
		$corpo_aluno = "<strong>Confirmação de Inscrição no Vestibular Tradicional da Faculdade Anasps 2018/2</strong>";
		$corpo_aluno .= "<br><br>Prezado(a) Candidato(a) $nome.";
		$corpo_aluno .= "<br><strong>RG: </strong>$rg - $orgao_expedidor";
		$corpo_aluno .= "<br><strong>CPF: </strong>$cpf";
		$corpo_aluno .= "<br>A sua Inscrição no Processo Seletivo 2º/2018 da Faculdade Anasps foi realizada!";
		$corpo_aluno .= "<br><br><strong>Curso: </strong>$curso_interesse.";
		$corpo_aluno .= "<br><strong>Data da Prova: </strong>$data_prova.";

		$corpo_aluno .= "<br><strong>Local: </strong>SCS Quadra 1, Bloco K, Lote 30, Edifício Denasa, 10º Andar, Salas 1001 a 1004, Asa Sul, Cep 70.398-900, Brasília/DF.";
		$corpo_aluno .= "<br><br><strong>Observações Importantes: </strong>";
		$corpo_aluno .= "<br><br><strong>Solicitamos que chegue ao local da prova com antecedência mínima de 15 (quinze) minutos, portando documento de identificação com foto e caneta esferográfica de tinta azul ou preta;</strong>";
		$corpo_aluno .= "<br><br><strong>Lembramos que o Processo Seletivo é solidário, portanto, não se esqueça de levar 2kg de alimentos não perecíveis, que deverão ser entregues ao fiscal de sala no dia da prova.</strong>";

		//para o envio em formato HTML
		$headers_aluno = "MIME-Version: 1.0\r\n";
		$headers_aluno .= "Content-type: text/html;
			charset=UTF-8\r\n";

		//endereço do remitente
		$headers_aluno .= "From: Faculdade ANASPS <contato@faculdadeanasps.com.br>\r\n";

		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_aluno .= "NO-REPLY\r\n";

		mysqli_set_charset($conexao, "utf8");

		$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$cpf', '$email', '$telefone_fixo', '$telefone_celular', '$telefone_comercial', 
		'$data_nasc', '$sexo', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$complemento', '$rg', '$orgao_expedidor')";
		$res = mysqli_query($conexao, $sql);
		$idusuarios = mysqli_insert_id($conexao);
		$inserir = mysqli_affected_rows($conexao);
		
		$sql = "INSERT INTO vestibular_tradicional VALUES (null, '$curso_interesse', '$turno', '$periodo', '$portador_necessidades_especiais', '$idusuarios','$vestibular','$hora_desejada')";
		$res = mysqli_query($conexao, $sql);
		$inserir = mysqli_affected_rows($conexao);
		
			

		$sql_historico = "INSERT INTO historico_escolar VALUES (null, '$ano_conclusao', '$escola', '$idusuarios')";
		$res = mysqli_query($conexao, $sql_historico);
		$idusuarios_historico = mysqli_insert_id($conexao);

		$inserir_historico = mysqli_affected_rows($conexao);

				

		require ('PHPMailer/class.phpmailer.php');

					$mail = new PHPMailer();
					$mail -> IsMail();
					$mail -> CharSet = 'UTF-8';
					$mail -> SetFrom('contato@faculdadeanasps.com.br', 'Inscrição Vestibular');

					$mail -> AddAddress($para_faculdade, 'Nova Inscrição');
					$mail -> AddCC($para_contato, 'Nova Inscrição');
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
							echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../vest_trad.php">';
						}
					}
				
			
		
		mysqli_close($conexao);
		?>
	</body>
</html>