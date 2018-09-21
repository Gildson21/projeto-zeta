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
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/uploadfilemulti.css" rel="stylesheet">
	
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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



<fieldset id="upar">
<div class="container">
    <div class="jumbotron">
       <center> <h2>Compartilhar arquivos</h2> </center>
        <center><button type="button" id="mulitplefileuploader">Importar arquivo(s)</button></center>
    </div>
</div>
</fieldset>




<footer id="rodape">
     <p>Copyright © 2018 - by Gildson Oliveira<br/>
        <a href="Contate-nos.php">Contate o Administrador</a>
    </p>
</footer>
</body>
</html>
<script src="JS/jquery.fileuploadmulti.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {

        var settings = {
            url: "importar.php",
            method: "POST",
            allowedTypes:"*",
            fileName: "file",
            multiple: true,

            onSuccess:function(files,data,xhr)
            {
                //faz alguma coisa

            },

            afterUploadAll:function()
            {
                $(".upload-bar").css("animation-play-state","paused");

            },
            onError: function(files,status,errMsg)
            {

                alert(errMsg);
            }


        }
        $("#mulitplefileuploader").uploadFile(settings);

    });
</script>