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
