<?php
if (!isset($_SESSION)){
    session_start();
}
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

<div class="menu">
    <ul type="disc">
        <li><a href="Pesquisar.php">Pesquisar</a></li>
        <li><a href="enviar.php">Compartilhar</a></li>
        <li><a href="deslogar.php">Sair</a></li>
    </ul>
</div>









<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a>
    </p>
</footer>
</body>
</html>