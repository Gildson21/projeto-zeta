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
    case 'LISTAR_ARQUIVOS':

        $stmt = $conn->prepare("SELECT id_arquivo, nome, tamanho, data FROM arquivos");

        $stmt->execute();

        if ($stmt->rowCount() > 0){

            $rows = $stmt->fetchAll();

            foreach ( $rows as $row){

                echo "<tr>
						<td>". $row['id_arquivo'] ."</td>
						<td>". $row['nome'] ."</td>
						<td>".$row['tamanho']."</td>
						<td>".$row['data']."</td>
						<td>
							<a href='visualizar_arquivo.php?acao=VISUALIZAR&id_arquivo=".$row['id_arquivo']."' target='_blank'><img src='IMG/pdf.png' style='width:30px; height:30px;cursor:pointer;'></a>
							<a href='visualizar_arquivo.php?acao=DOWNLOAD&id_arquivo=".$row['id_arquivo']."' target='_blank'><img src='IMG/download.png' style='width:30px; height:30px;cursor:pointer;'></a>
							<a href='#' onclick='excluir_arquivo(".$row['id_arquivo'].");'><img src='IMG/delete.png' style='width:30px; height:30px;cursor:pointer;'></a>
						</td>


					</tr>";
            }

        }




        break;

    case 'EXCLUIR_ARQUIVO':

        $result = $conn->query("DELETE FROM arquivos WHERE id_arquivo = $id_arquivo");

        if(mysqli_affected_rows($conn) > 0){
            echo 1;
        }else{
            echo 0;
        }

        break;

}


?>