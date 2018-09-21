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


<header id="pesquisar">
    <fieldset  id="pesq">

        <center><h1>Pesquisar</h1></center>
        <form method="POST" id="form-pesquisa" action="">
        <center>  <input type="text" name="pesquisa" size="60" id="pesquisa" placeholder="Digite sua pesquisa aqui!"></center>
        </form>
        <ul class="resultado">   
        </ul>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/personalizado.js"></script>
    </fieldset>
</header>


<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a>
    </p>
</footer>
</body>
</html>