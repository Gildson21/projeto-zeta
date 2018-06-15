function validacao_form1(){
	if (document.form1.nome.value == ""){
		alert ("Preencha o campo NOME!");
		form1.nome.focus();
		return false;
	}
	if (document.form1.sexo.value == ""){
		alert ("Selecione SEXO!");
		form1.sexo.focus();
		return false;
	}
	if (document.form1.data_nascimento.value == ""){
		alert ("Informe DATA!!");
		form1.data_nascimento.focus();
		return false;
	}	
	if (document.form1.email.value == "" || document.form1.email.value.indexOf('@')==-1 || document.form1.email.value.indexOf('.')==-1){
		alert ("Insira um E-MAIL válido!");
		form1.email.focus();
		return false;
	}	
	if (document.form1.senha.value.length < 8){
		alert ("Preencha o campo SENHA! Mínimo 8 caracteres");
		form1.senha.focus();
		return false;
	}
	return true;	
}