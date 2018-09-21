<?php
if (!isset($_SESSION)){
    session_start();
}

// ferificando existe usuario logado na sessão
//se não existir, vai redirecionar para a index
/*
if ( !isset($_SESSION['email']) || empty($_SESSION['email']) ){
    header('Location: index.php');
}
*/

/*
if ( $_SESSION['tipoDeUsuario'] != "adm"  ){
    header('Location: index.php');
}
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>RI Castanhal</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
</head>
<body>

<header id="login">
    <fieldset id="corpo">
        <img id="icone" src="imagens/logo1.png"/>
		 <h1>RI Castanhal</h1>
		<h2>Compartilhando o conhecimento</h2>
    </fieldset>
</header>

<div class="menu2">
    <ul type="disc">
        <li><a href="adicionar.php">Adicionar</a></li>
        <li><a href="Pesquisar-adm.php">Pesquisar</a></li>
        <li><a href="enviar-adm.php">Compartilhar</a></li>
        <li><a href="deslogar.php">Sair</a></li>
    </ul>
</div>

<div id="legenda">
<center><h1>Área do Administrador</h1></center>
</div>

<header id="cadastro-usuario">
    <fieldset id="cadastro-usuario">
        <center><h3>Cadastre Usuário</h3></center>
        <form method="post" name="form1" action="fnc_cadastra.php" onsubmit="return validacao_form1(this);">
            <p>Nome: <input type="text" name="nome" size="40" maxlength="40" placeholder=" Nome"/></p>
            <p>Sexo: <select name="sexo">
                    <option>Selecione sexo</option>
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


<header id="cadastro-adm">
    <fieldset id="cadastro-adm">
        <center><h3>Cadastre Administrador</h3></center>
        <form method="post" name="form1" action="fnc_cadastra-adm.php" onsubmit="return validacao_form1(this);">
            <p>Nome: <input type="text" name="nome" size="40" maxlength="40" placeholder=" Nome"/></p>
            <p>Sexo: <select name="sexo">
                    <option>Selecione sexo</option>
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


<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a>
    </p>
</footer>
</body>
</html>
