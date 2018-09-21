<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>RI Castanhal</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <script language="javascript" src="JS/validacao_form1.js"></script>
    <script language="javascript" src="JS/validacao_form2.js"></script>
</head>
<body>

<header id="login">
    <fieldset id="corpo">
        <img id="icone" src="imagens/logo1.png"/>
        <h1>RI Castanhal</h1>
		<h2>Compartilhando o conhecimento</h2>
		<h3>Usuário</h3>
        <h4>Senha</h4>
        <form method="post" id="tela_de_login" action="autenticando-adm.php" name="form2" >
            <p>
                <input type="email" name="email" size="19" maxlength="40" placeholder=" E-Mail" required > &nbsp;
                <input type="password" name="senha" size="15" maxlength="36" placeholder=" ********" required > &nbsp;
                <input type="submit" name="btn_enviar" value="Entrar" >
            </p>
        </form>
    </fieldset>
</header>

<div id="legenda1">
<center><h1>Área do Administrador</h1></center>
</div>

<header id="imagem2">
    <p>Junte-se a várias pessoas que buscam e compatilham conhecimentos</p>
    <img id="imagem2" src="imagens/imagem1.jpg">
</header>


<?php
if (!isset($_SESSION)){
    session_start();
}
?>

<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a> |
        <a href="pesquisar-adm.php">ADM</a>
    </p>
</footer>
</body>
</html>
