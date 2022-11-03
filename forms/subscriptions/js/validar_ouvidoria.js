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

function validacao_matricula() {
	
	// pega o valor inserido no campo.
	var matricula = document.getElementById("matricula").value;
	// concatena 10 zeros a esquerda do valor inserido no campo.			
	matricula = "0000000000" + matricula;
	// no substring pega os últimos 10 digitos.
	var campoFormatado = matricula.substring(matricula.length - 10, matricula.length);
	// passa o campo formatado para o seu TextBox.
	document.getElementById("matricula").value = campoFormatado;

	if (document.form1.matricula.value == "0000000000") {
		//document.form1.matricula.focus();
		var div = document.getElementById('matricula_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('matricula_validar');
		div.style.display = 'none';
		return true;

	}
}

function limpar_campo(campo) {
	
	if(campo == "matricula"){
		var valor = document.getElementById("matricula").value
		if( valor == "0000000000"){
			var div = document.getElementById(campo + '_validar');
			div.style.display = 'none';
			document.getElementById("matricula").value = "";
			return true;
		}
	}
	
	var div = document.getElementById(campo + '_validar');
	div.style.display = 'none';
	return true;
}

function validacao_perfil() {
	if (document.form1.perfil.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('perfil_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('perfil_validar');
		div.style.display = 'none';
		return true;
	}
}

function validacao_assunto() {
	if (document.form1.assunto.value == "Selecione") {
		//document.form1.nome.focus();
		var div = document.getElementById('assunto_validar');
		div.style.display = 'block';
		return false;
	} else {
		var div = document.getElementById('assunto_validar');
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
	
	if (validacao_perfil() == false) {
		return false;
	}
	
	if (validacao_assunto() == false) {
		return false;
	}
	
	if (validacao_mensagem() == false) {
		return false;
	}
	
	if (validacao_captcha() == false) {
		return false;
	}

}