<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=documentos', 'root', '');

}catch(pdoException $erro){
    echo 'Erro inesperado, veja: ' . $erro->getMessage();
}

if (isset($_POST["id_arquivo"])){
    $id_arquivo = $_POST["id_arquivo"];
}

if (isset($_POST["metodo"])){
    $metodo 	= $_POST["metodo"];
}

switch ($metodo) {

    case 'EXCLUIR_ARQUIVO':

        $sql = "DELETE FROM arquivos WHERE id_arquivo = " . $id_arquivo;

        $conn->exec($sql);

        $conn = null;

        break;

}


?>