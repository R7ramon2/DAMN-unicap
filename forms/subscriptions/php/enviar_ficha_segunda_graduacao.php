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
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$cep = $_POST['cep'];
		$complemento = $_POST['complemento'];
		//$data_nasc = $_POST['data_nasc'];
		//$sexo = $_POST['sexo'];
		$rg = $_POST['rg'];
		$orgao_expedidor = $_POST['orgao_expedidor'];
		$cpf = $_POST['cpf'];
		//$password = $_POST['senha'];

		$telefone_fixo = $_POST['telefone_fixo'];
		$telefone_celular = $_POST['telefone_celular'];
		$telefone_comercial = $_POST['telefone_comercial'];
		$email = $_POST['email'];

		$instituicao_origem = $_POST['instituicao_origem'];
		$curso_origem = $_POST['curso_origem'];

		$qtd_disciplinas_aprovadas = $_POST['qtd_disciplinas_aprovadas'];

		$periodo = $_POST['periodo'];
		$curso = $_POST['curso'];
		$turno = $_POST['turno'];
		$data_nasc = $_POST['data_nasc'];
		$sexo = $_POST['sexo'];

		$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$cpf', '$email', '$telefone_fixo', '$telefone_celular', '$telefone_comercial', 
		'$data_nasc', '$sexo', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$complemento', '$rg', '$orgao_expedidor')";
		$res = mysqli_query($conexao, $sql);
		$idusuarios = mysqli_insert_id($conexao);

		$inserir = mysqli_affected_rows($conexao);

		$para_faculdade = "secretaria@faculdadeanasps.com.br";
		$para_contato = "contato@faculdadeanasps.com.br";
		//$para_faculdade = "bruesmanbruesman@hotmail.com";
		$assunto_faculdade = "Segunda Graduação";
		$corpo_faculdade = "Solicitação de Segunda Graduação";
		$corpo_faculdade .= "<br><br><strong>Nome: </strong>$nome";
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
		
		$corpo_faculdade .= "<br><strong>Instituição de Origem: </strong>$instituicao_origem";
		$corpo_faculdade .= "<br><strong>Curso de Origem: </strong>$curso_origem";
		
		$corpo_faculdade .= "<br><strong>Quantidade de disciplinas aprovadas: </strong>$qtd_disciplinas_aprovadas";
		
		$corpo_faculdade .= "<br><br><strong>Período de Ingresso: </strong>$periodo";
		$corpo_faculdade .= "<br><strong>Curso de Interesse: </strong>$curso";
		$corpo_faculdade .= "<br><strong>Turno: </strong>$turno";
		
		//para o envio em formato HTML
		$headers_faculdade = "MIME-Version: 1.0\r\n";
		$headers_faculdade .= "Content-type: text/html;
		charset=UTF-8\r\n";

		//endereço do remitente
		$headers_faculdade .= "From: Contato Site <contato@faculdadeanasps.com.br>\r\n";

		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_faculdade .= "Reply-To: $email \r\n";

		//endereços que receberão uma copia
		//$headers .= "Cc: email@email.com.br\r\n";
		//endereços que receberão uma copia oculta



		$para_aluno = $email;
		$assunto_aluno = "Inscrição Faculdade Anasps";
		$corpo_aluno = "<strong>Confirmação de envio de ficha Segunda Graduação</strong>";
		$corpo_aluno .= "<br><br>Prezado(a) Candidato(a) $nome.";
		$corpo_aluno .= "<br><strong>RG: </strong>$rg - $orgao_expedidor";
		$corpo_aluno .= "<br><strong>CPF: </strong>$cpf";
		$corpo_aluno .= "<br>A sua ficha foi enviada com sucesso!";
		$corpo_aluno .= "<br><br><strong>Curso: </strong>$curso.";

		$corpo_aluno .= "<br><strong>Local: </strong>SCS Quadra 1, Bloco K, Lote 30, Edifício Denasa, 10º Andar, Salas 1001 a 1004, Asa Sul, Cep 70.398-900, Brasília/DF.";

		//para o envio em formato HTML
		$headers_aluno = "MIME-Version: 1.0\r\n";
		$headers_aluno .= "Content-type: text/html;
			charset=UTF-8\r\n";

		//endereço do remitente
		$headers_aluno .= "From: Faculdade ANASPS <contato@faculdadeanasps.com.br>\r\n";

		//endereço de resposta, se queremos que seja diferente a do remitente
		$headers_aluno .= "NO-REPLY\r\n";




		$teste = 0;

		$arquivo1 = $_FILES['arquivo1'];

		$arquivo2 = $_FILES['arquivo2'];
		$arquivo3 = $_FILES['arquivo3'];

		$tamanho = 5242880;
		$tipos = array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/tiff', 'image-x-tiff', 'application/pdf');

		/*
		 if ($arquivo1['size'] > $tamanho) {
		 $msg = 'Limite do arquivo1 é de 5 MB';
		 } elseif (!in_array($arquivo1['type'], $tipos)) {
		 $msg = 'Tipo de arquivo1 inválido]';
		 } */

		if ($arquivo2['size'] > $tamanho) {
			$msg = 'Limite do arquivo2 é de 5 MB';
		} elseif (!in_array($arquivo2['type'], $tipos)) {
			$msg = 'Tipo de arquivo2 inválido]';
		} elseif ($arquivo3['size'] > $tamanho) {
			$msg = 'Limite do arquivo3 é de 5 MB';
		} elseif (!in_array($arquivo3['type'], $tipos)) {
			$msg = 'Tipo de arquivo3 inválido]';
		} else {
			require ('PHPMailer/class.phpmailer.php');

			$mail = new PHPMailer();
			$mail -> IsMail();

			$mail -> SetFrom('secretaria@faculdadeanasps.com.br', 'Solicitação - Segunda Graduação');

			$mail -> AddAddress($para_faculdade, 'Segunda Graduacao');
			$mail -> AddCC($para_contato, 'Segunda Graduacao');
			$mail -> Subject = $assunto_faculdade;

			$mail -> MsgHTML($corpo_faculdade);

			$mail -> AddAttachment($arquivo1['tmp_name'], $arquivo1['name']);

			$mail -> AddAttachment($arquivo2['tmp_name'], $arquivo2['name']);
			$mail -> AddAttachment($arquivo3['tmp_name'], $arquivo3['name']);

			if($mail -> Send()){

					$mail = new PHPMailer();
					$mail -> IsMail();
					$mail -> CharSet = 'UTF-8';

					$mail -> SetFrom('contato@faculdadeanasps.com.br', 'Ficha Segunda Graduação');

					$mail -> AddAddress($para_aluno, 'Ficha enviada');
					$mail -> Subject = $assunto_aluno;[]

					$mail -> MsgHTML($corpo_aluno);



				if ($mail -> Send()) {
					echo "<script type='text/javascript'>window.alert('" . $nome . "! Sua ficha foi enviada com sucesso!');</script>";
					echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../../../presencial.php">';
				} else {
					echo "<script type='text/javascript'>window.alert('" . $nome . "! Sua ficha NÃO foi enviada!');</script>";
					echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=../segunda_graduacao.html">';
				}
			}

		}
		mysqli_close($conexao);

		?>
	</body>

</html>