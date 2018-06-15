<?php

try{
	$conect = new PDO('mysql:host=localhost;dbname=documentos', 'root', '');
		
}catch(pdoException $erro){
	echo 'Erro inesperado, veja: ' . $erro->getMessage();	
}
?>