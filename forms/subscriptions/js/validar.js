/**
 * @author Hugo Lumazzini Paiva
 */
function validacao_nome() {
	if (document.form1.nome.value == "") {
		//document.form1.nome.focus();
		var div = document.getElementById('nome_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.nome.value.length < 5) {
		//document.form1.nome.focus();
		var div = document.getElementById("nome_validar");
		div.style.display = 'block';
		div.innerHTML = "O nome deve ter mais de 5 caracteres";
		return false;
	} else {
		var div = document.getElementById('nome_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_empresa() {
	if (document.form1.tipo_empresa.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('empresa_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('empresa_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_sexo() {
	if (document.form1.sexo.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('sexo_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('sexo_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_cargo() {
	if (document.form1.cargo.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('cargo_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('cargo_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_cep() {

	if (document.form1.cep.value == "") {
		//document.form1.cep.focus();
		var div = document.getElementById('cep_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.cep.value.length != 9) {
		//document.form1.cep.focus();
		var div = document.getElementById("cep_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite um CEP válido";
		return false;
	} else {
		var div = document.getElementById('cep_validar');
		div.style.display = 'none';
		/* Configura a requisição AJAX */
		$.ajax({
			url : 'consultar_cep.php', /* URL que será chamada */
			type : 'POST', /* Tipo da requisição */
			data : 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
			dataType : 'json', /* Tipo de transmissão */
			success : function(data) {
				if (data.sucesso == 1) {
					$('#endereco').val(data.endereco);
					$('#bairro').val(data.bairro);
					$('#cidade').val(data.cidade);
					$('#uf').val(data.uf);

					// $('#numero').focus();
				}
			}
		});
		return true;

	}
}

function validacao_endereco() {

	if (document.form1.endereco.value == "") {
		//document.form1.endereco.focus();
		var div = document.getElementById('endereco_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.endereco.value.length < 5) {
		//document.form1.endereco.focus();
		var div = document.getElementById("endereco_validar");
		div.style.display = 'block';
		div.innerHTML = "O endereço deve mais de 5 caracteres";
		return false;
	} else {
		var div = document.getElementById('endereco_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_contato() {

	if (document.form1.contato.value == "") {
		//document.form1.bairro.focus();
		var div = document.getElementById('contato_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('contato_validar');
		div.style.display = 'none';
		return true;
	}

}

function validacao_bairro() {

	if (document.form1.bairro.value == "") {
		//document.form1.bairro.focus();
		var div = document.getElementById('bairro_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('bairro_validar');
		div.style.display = 'none';
		return true;
	}

}

function validacao_cidade() {

	if (document.form1.cidade.value == "") {
		//document.form1.cidade.focus();
		var div = document.getElementById('cidade_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.cidade.value.length < 2) {
		//document.form1.cidade.focus();
		var div = document.getElementById("cidade_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite uma cidade válida";
		return false;
	} else {
		var div = document.getElementById('cidade_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_uf() {

	if (document.form1.uf.value == "") {
		//document.form1.uf.focus();
		var div = document.getElementById('uf_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.uf.value.length != 2) {
		//document.form1.uf.focus();
		var div = document.getElementById("uf_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite a UF com 2 caracteres";
		return false;
	} else {
		var div = document.getElementById('uf_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_rg() {

	if (document.form1.rg.value == "") {
		//document.form1.rg.focus();
		var div = document.getElementById('rg_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('rg_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_orgao_expedidor() {

	if (document.form1.orgao_expedidor.value == "") {
		//document.form1.orgao_expedidor.focus();
		var div = document.getElementById('orgao_expedidor_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('orgao_expedidor_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_cpf() {
	if (document.form1.cpf.value == "") {
		//document.form1.nome.focus();
		var div = document.getElementById('cpf_validar');
		div.style.display = 'block';
		return false;
	} else if (validarCPF(document.form1.cpf.value) == false) {
		var div = document.getElementById('cpf_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('cpf_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_data_nasc() {

	if (document.form1.data_nasc.value == "") {
		//document.form1.data_nasc.focus();
		var div = document.getElementById('data_nasc_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.data_nasc.value.length != 10) {
		//document.form1.data_nasc.focus();
		var div = document.getElementById("data_nasc_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite uma data válida";
		return false;
	} else {
		var div = document.getElementById('data_nasc_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_celular() {

	if (document.form1.celular.value == "") {
		//document.form1.celular.focus();
		var div = document.getElementById('celular_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.celular.value.length < 14) {
		//document.form1.celular.focus();
		var div = document.getElementById("celular_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite um celular válido";
		return false;
	} else {
		var div = document.getElementById('celular_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_email() {

	if (document.form1.email.value == "") {
		//document.form1.email.focus();
		var div = document.getElementById('email_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.email.value.indexOf('@') == -1 || document.form1.email.value.indexOf('.') == -1) {//document.form1.email.focus();
		var div = document.getElementById("email_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite um e-mail válido";
		return false;
	} else {
		var div = document.getElementById('email_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_confirmacao_email() {

	if (document.form1.confirmacao_email.value != document.form1.email.value) {
		//document.form1.confirmacao_email.focus();
		var div = document.getElementById('confirmacao_email_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('confirmacao_email_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_ano_conclusao() {

	if (document.form1.ano_conclusao.value == "") {
		//document.form1.ano_conclusao.focus();
		var div = document.getElementById('ano_conclusao_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.ano_conclusao.value.length != 4) {
		//document.form1.ano_conclusao.focus();
		var div = document.getElementById("ano_conclusao_validar");
		div.style.display = 'block';
		div.innerHTML = "Digite um ano com 4 dígitos";
		return false;
	} else {
		var div = document.getElementById('ano_conclusao_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_escola() {

	if (document.form1.escola.value == "") {
		//document.form1.escola.focus();
		var div = document.getElementById('escola_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('escola_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_data_desejada() {
	if (document.form1.data_desejada.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('data_desejada_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('data_desejada_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_hora_desejada() {
	if (document.form1.hora_desejada.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('hora_desejada_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('hora_desejada_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_nota_enem() {

	if (document.form1.nota_enem.value == "") {
		//document.form1.escola.focus();
		var div = document.getElementById('nota_enem_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('nota_enem_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_instituicao_origem() {

	if (document.form1.instituicao_origem.value == "") {
		//document.form1.instituicao_origem.focus();
		var div = document.getElementById('instituicao_origem_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('instituicao_origem_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_curso_origem() {

	if (document.form1.curso_origem.value == "") {
		//document.form1.curso_origem.focus();
		var div = document.getElementById('curso_origem_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('curso_origem_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_mensagem() {

	if (document.form1.mensagem.value == "") {
		//document.form1.mensagem.focus();
		var div = document.getElementById('mensagem_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.mensagem.value.length < 10) {
		//document.form1.mensagem.focus();
		var div = document.getElementById("mensagem_validar");
		div.style.display = 'block';
		div.innerHTML = "A mensagem deve ter no mínimo 10 caracteres";
		return false;
	} else {
		var div = document.getElementById('mensagem_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_curriculo() {

	if (document.form1.curriculo.value == "") {
		//document.form1.curriculo.focus();
		var div = document.getElementById('curriculo_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.curriculo.value.length < 10) {
		//document.form1.curriculo.focus();
		var div = document.getElementById("curriculo_validar");
		div.style.display = 'block';
		div.innerHTML = "O currículo deve ter no mínimo 10 caracteres";
		return false;
	} else {
		var div = document.getElementById('curriculo_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_matricula() {

	if (document.form1.matricula.value == "") {
		//document.form1.matricula.focus();
		var div = document.getElementById('matricula_validar');
		div.style.display = 'block';
		return false;
	} else if (document.form1.matricula.value.length < 10) {
		//document.form1.matricula.focus();
		var div = document.getElementById("matricula_validar");
		div.style.display = 'block';
		div.innerHTML = "A matrícula deve ter no mínimo 10 caracteres";
		return false;
	} else {
		var div = document.getElementById('matricula_validar');
		div.style.display = 'none';
		return true;

	}
}

function validacao_arquivo1() {

	var qtd_disciplinas = document.getElementById("qtd_disciplinas_aprovadas").value;

	if (qtd_disciplinas != "0") {

		var div = document.getElementById('upload1');
		div.style.display = 'block';

		if (document.form1.arquivo1.value == "") {
			var div = document.getElementById('arquivo1_validar');
			div.style.display = 'block';
			return false;
		} else {
			var div = document.getElementById('arquivo1_validar');
			div.style.display = 'none';
			return true;
		}
	} else {
		var div = document.getElementById('upload1');
		div.style.display = 'none';
		document.form1.arquivo1.value = "";
		return true;
	}

}

function validacao_arquivo2() {

	if (document.form1.arquivo2.value == "") {
		//document.form1.endereco.focus();
		var div = document.getElementById('arquivo2_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('arquivo2_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_arquivo3() {

	if (document.form1.arquivo3.value == "") {
		//document.form1.endereco.focus();
		var div = document.getElementById('arquivo3_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('arquivo3_validar');
		div.style.display = 'none';
		return true;

	}

}

function validacao_captcha() {
	if (grecaptcha.getResponse() == "") {
		var div = document.getElementById('captcha_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('captcha_validar');
		div.style.display = 'none';
		return true;
	}
}

function limpar_campo(campo) {
	var div = document.getElementById(campo + '_validar');
	div.style.display = 'none';
	return true;
}

function verifica_declaracoes_transferencia_externa() {
	var chk1 = document.form1.checkbox1.checked;
	var chk2 = document.form1.checkbox2.checked;

	if (chk1 == false || chk2 == false) {
		var div = document.getElementById('declaracoes_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('declaracoes_validar');
		div.style.display = 'none';
		return true;
	}
}

function verifica_declaracoes_segunda_graduacao() {
	var chk1 = document.form1.checkbox1.checked;
	var chk2 = document.form1.checkbox2.checked;

	if (chk1 == false || chk2 == false) {
		var div = document.getElementById('declaracoes_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('declaracoes_validar');
		div.style.display = 'none';
		return true;
	}
}

function scrollTo(elemento) {

	var divPosition = $('#' + elemento).offset();
	$('html, body').animate({
		scrollTop : divPosition.top
	}, "slow");
	return false;
}

function validar_formulario_ficha_enem() {

	if (validacao_nome() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_data_nasc() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}
	if (validacao_sexo() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_cep() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_endereco() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_bairro() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cidade() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_uf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_rg() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_orgao_expedidor() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cpf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_celular() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_confirmacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_ano_conclusao() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_escola() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (validacao_nota_enem() == false) {
		scrollTo("form_historico");
		return false;
	}
	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_ficha_vestibular_tradicional() {

	if (validacao_nome() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_data_nasc() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_sexo() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_cep() == false) {
		scrollTo("form_dados_cadastrais");

		return false;

	}

	if (validacao_endereco() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_bairro() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cidade() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_uf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_rg() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_orgao_expedidor() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cpf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_celular() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_confirmacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_ano_conclusao() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_escola() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_ficha_segunda_graduacao() {

	if (validacao_nome() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_cep() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_endereco() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}

	if (validacao_bairro() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cidade() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_uf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_rg() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_orgao_expedidor() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cpf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_celular() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_confirmacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_instituicao_origem() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_curso_origem() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (validacao_arquivo1() == false) {
		scrollTo("form_historico");
		return false;
	}

	if (validacao_arquivo2() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (validacao_arquivo3() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (verifica_declaracoes_segunda_graduacao() == false) {
		return false;
	}
	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_ficha_transferencia_externa() {

	if (validacao_nome() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}
	if (validacao_cep() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}
	if (validacao_endereco() == false) {
		scrollTo("form_dados_cadastrais");
		return false;
	}
	if (validacao_bairro() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cidade() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_uf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_rg() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_orgao_expedidor() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cpf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_celular() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_confirmacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_instituicao_origem() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_curso_origem() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_arquivo1() == false) {
		scrollTo("form_historico");
		return false;
	}
	if (validacao_arquivo2() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_arquivo3() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (verifica_declaracoes_transferencia_externa() == false) {
		return false;
	}
	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_ouvidoria() {
	if (validacao_matricula() == false) {
		return false;
	}

	if (validacao_nome() == false) {
		return false;
	}

	if (validacao_email() == false) {
		return false;
	}

	if (validacao_celular() == false) {
		return false;
	}
	if (validacao_mensagem() == false) {
		return false;
	}

}

function validar_formulario_fale_conosco() {

	if (validacao_nome() == false) {
		return false;
	}

	if (validacao_email() == false) {
		return false;
	}
	if (validacao_mensagem() == false) {
		return false;
	}

}

function validar_formulario_trabalhe_conosco() {

	if (validacao_nome() == false) {
		return false;
	}

	if (validacao_email() == false) {
		return false;
	}
	if (validacao_celular() == false) {
		return false;
	}
	if (validacao_cargo() == false) {
		return false;
	}
	if (validacao_curriculo() == false) {
		return false;
	}

}


function validar_formulario_trabalhe_conosco_docente() {

	if (validacao_nome() == false) {
		return false;
	}
	if (validacao_email() == false) {
		return false;
	}
	if (validacao_celular() == false) {
		return false;
	}
	if (validacao_formacao_superior() == false) {
		return false;
	}
	if (validacao_titulacao() == false) {
		return false;
	}
	if (validacao_descricao_titulacao() == false) {
		return false;
	}
	if (validacao_disciplinas() == false) {
		return false;
	}
	if (validacao_curriculo() == false) {
		return false;
	}
}


function validar_formulario_trabalhe_conosco_tecnico() {

	if (validacao_nome() == false) {
		return false;
	}
	if (validacao_email() == false) {
		return false;
	}
	if (validacao_celular() == false) {
		return false;
	}
	if (validacao_formacao() == false) {
		return false;
	}
	if (validacao_instituicao_ensino() == false) {
		return false;
	}
	if (validacao_curriculo() == false) {
		return false;
	}
}


function validar_formulario_confirmacao_email() {

	if (validacao_data_nasc() == false) {
		return false;
	}

	if (validacao_cpf() == false) {
		return false;
	}

	if (validacao_email() == false) {
		return false;
	}
	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_interesse() {

	if (validacao_nome() == false) {
		return false;
	}

	if (validacao_celular() == false) {
		return false;
	}
	if (validacao_email() == false) {
		return false;
	}

	if (validacao_captcha() == false) {
		return false;
	}
}

function validar_formulario_vestibular() {

	if (validacao_cpf() == false) {
		return false;
	}

	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_ficha_vestibular_agendado() {

	if (validacao_nome() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_data_nasc() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_sexo() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_cep() == false) {
		scrollTo("form_dados_cadastrais");

		return false;

	}

	if (validacao_endereco() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}

	if (validacao_bairro() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cidade() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_uf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_rg() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_orgao_expedidor() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_cpf() == false) {
		scrollTo("form_dados_cadastrais");

		return false;
	}
	if (validacao_celular() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_confirmacao_email() == false) {
		scrollTo("form_contato");

		return false;
	}
	if (validacao_ano_conclusao() == false) {
		scrollTo("form_historico");

		return false;
	}
	if (validacao_escola() == false) {
		scrollTo("form_historico");

		return false;
	}

	if (validacao_data_desejada() == false) {
		scrollTo("form_historico");

		return false;
	}
/*
	if (validacao_hora_desejada() == false) {
		scrollTo("form_historico");

		return false;
	}
	*/
	if (validacao_captcha() == false) {
		return false;
	}

}

function validar_formulario_convenios() {

	if (validacao_tipo_empresa() == false) {
		return false;
	}

	if (validacao_nome() == false) {

		return false;
	}

	if (validacao_contato() == false) {

		return false;
	}

	if (validacao_email() == false) {

		return false;
	}

	if (validacao_cep() == false) {

		return false;

	}

	if (validacao_endereco() == false) {

		return false;
	}

	if (validacao_bairro() == false) {

		return false;
	}
	if (validacao_cidade() == false) {

		return false;
	}
	if (validacao_uf() == false) {

		return false;
	}

	if (validacao_celular() == false) {

		return false;
	}

	if (validacao_captcha() == false) {
		return false;
	}

}