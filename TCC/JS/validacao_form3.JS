function validacao_form3(){
	if (document.form3.nome.value == ""){
		alert ("Preencha campo nome!");
		form3.nome.focus();
		return false;
	}	
	if (document.form3.email.value == "" || document.form3.email.value.indexOf('@')==-1 || document.form3.email.value.indexOf('.')==-1){
		alert ("Insira um E-MAIL válido!");
		form3.email.focus();
		return false;
	}	
	if (document.form3.assunto.value == ""){
		alert ("Preencha o campo Assunto!");
		form3.assunto.focus();
		return false;
	}
	if (document.form3.mensagem.value == ""){
		alert ("Preencha o campo Mensagem!");
		form3.mensagem.focus();
		return false;
	}
	return true;	
}