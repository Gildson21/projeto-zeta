<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>RI Castanhal</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
	<script language="javascript" src="JS/validacao_form3.js"></script>
</head>
<body>

<header id="login">
    <fieldset id="corpo">
        <img id="icone" src="imagens/logo1.png"/>
		 <h1>RI Castanhal</h1>
		<h2>Compartilhando o conhecimento</h2>
    </fieldset>
</header>

<div class="menu1">
    <ul type="disc">
        <li><a href="index.php">Início</a></li>
    </ul>
</div>

<fieldset id="mensagem">
<form name="form3" method="post" action="enviando.php" onsubmit="return validacao_form3(this);">
<center>Envie sua mensagem</center><br/>
Nome: <input type="text" name="nome" size="54" placeholder=" Nome" ><br/><br/>
E-mail: <input type="text" name="email" size="54" placeholder=" E-mail" ><br/><br/>
Assunto: <input type="text" name="assunto" size="54" placeholder=" Assunto" ><br/><br/>
Mensagem: <textarea name="mensagem" cols="41" rows="15" placeholder=" Deixe sua mensagem aqui..." ></textarea><br/><br/>
<center><input  type="submit" name="btn_msg" value="Enviar Mensagem"></center>
</form>
</fieldset>



<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
    </p>
</footer>
</body>
</html>
