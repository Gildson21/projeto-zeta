function validacao_form2(){
	if (document.form2.email.value == "" || document.form2.email.value.indexOf('@')==-1 || document.form2.email.value.indexOf('.')==-1){
		alert ("Insira um E-MAIL válido!");
		form2.email.focus();
		return false;
	}	
	if (document.form2.senha.value.length < 8){
		alert ("Verifique se digitou a senha corretamente!");
		alert ("Mínimo 8 caracteres!");
		form2.senha.focus();
		return false;
	}
	return true;	
}