<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>MUDAR NOME DO SISTEMA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <script language="javascript" src="JS/validacao_form1.js"></script>
    <script language="javascript" src="JS/validacao_form2.js"></script>
</head>
<body>

<header id="login">
    <fieldset id="corpo">
        <img id="icone" src="imagens/logo1.png"/>
    </fieldset>
</header>

<div class="menu">
    <ul type="disc">
        <li><a href="Contate-nos.php">Contate-nos</a></li>
        <li><a href="enviar.php">Compartilhar</a></li>
        <li><a href="deslogar.php">Sair</a></li>
    </ul>
</div>


<header id="cadastro">
    <fieldset id="cadastro">

        <h1>Pesquisar</h1>
        <form method="POST" id="form-pesquisa" action="">
            <label>Pesquisar: </label>
            <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário">
        </form>
        <ul class="resultado">
        </ul>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/personalizado.js"></script>
    </fieldset>
</header>

<?php
if (!isset($_SESSION)){
    session_start();
}
?>

<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="https://www.facebook.com/"target="_blank">Facebook</a> |
        <a href="https://twitter.com"target="_blank">Twitter</a>
    </p>
</footer>
</body>
</html>
