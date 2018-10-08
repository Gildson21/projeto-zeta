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
<a href="index.php"><img id="icone" src="imagens/logo1.png"/></a>
        <h1>RI Castanhal</h1>
		<h2>Compartilhando o conhecimento</h2>
		<h3>Usuário</h3>
        <h4>Senha</h4>
        <form method="post" id="tela_de_login" action="autenticando.php" name="form2" >
            <p>
                <input type="email" name="email" size="19" maxlength="40" placeholder=" E-Mail" required > &nbsp;
                <input type="password" name="senha" size="15" maxlength="36" placeholder=" ********" required > &nbsp;
                <input type="submit" name="btn_enviar" value="Entrar" >
            </p>
        </form>
    </fieldset>
</header>

<header id="imagem1">
    <p>Junte-se a várias pessoas que buscam e compatilham conhecimentos</p>
    <img id="imagem1" src="imagens/imagem1.jpg">
</header>

<header id="cadastro">
    <fieldset id="cadastro">
        <center><h3>Cadastre-se</h3></center>
        <form method="post" name="form1" action="fnc_cadastra.php" onsubmit="return validacao_form1(this);">
            <p>Nome: <input type="text" name="nome" size="40" maxlength="40" placeholder=" Nome"/></p>
            <p>Sexo: <select name="sexo">
                    <option> </option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    </optgroup>
                </select> </p>
            <p>Data de Nascimento: <input type="date" name="data_nascimento" placeholder=" 01/01/1990"></p>
            <p>E-mail: <input type="text" name="email" size="40" placeholder=" E-mail"/></p>
            <p>Senha: <input type="password" name="senha" size="40" placeholder=" ********" /></p>
            <center><input type="submit" name="bt_enviar" value="Cadastrar" /></center>
        </form>
    </fieldset>
</header>

<?php
if (!isset($_SESSION)){
    session_start();
}
?>

<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a> |
        <a href="index-adm.php">ADM</a>
    </p>
</footer>
</body>
</html>
