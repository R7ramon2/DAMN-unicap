/**
 * @author Hugo Lumazzini Paiva
 */
function validacao_cpf() {
	if (document.form1.cpf.value == "") {
		//document.form1.nome.focus();
		var div = document.getElementById('cpf_validar');
		div.style.display = 'block';
		return false;
	}	
	else if (validarCPF(document.form1.cpf.value) == false) {
		var div = document.getElementById('cpf_validar');
		div.style.display = 'block';
		return false;
	}
	else{
		var div = document.getElementById('cpf_validar');
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
function validar_formulario_vestibular() {
	if (validacao_cpf() == false) {
		return false;
	}
	if (validacao_captcha() == false) {
		return false;
	}
}