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
    <a href="index.php">  <img id="icone" src="imagens/logo1.png"/></a>
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


<header id="pesquisar">
    <fieldset  id="pesq">

        <center><h1>Pesquisar</h1></center>
        <form method="POST" id="form-pesquisa" action="">
        <center>  <input type="text" name="pesquisa" size="60" id="pesquisa" placeholder="Digite sua pesquisa aqui!"></center>
        </form>
        <ul class="resultado">   
        </ul>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script type="text/javascript" src="JS/personalizado2.js"></script>
    </fieldset>
</header>




<footer id="rodape">
    <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a>
    </p>
</footer>
</body>
</html>
