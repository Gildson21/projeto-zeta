<?php
if (!isset($_SESSION)){
    session_start();
}

// ferificando existe usuario logado na sessão
//se não existir, vai redirecionar para a index



//Incluir a conexão com banco de dados
include_once 'con_pdo.php';

$arquivos = "'%";

$arquivos .= filter_input( INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$arquivos .= "%'";


//Pesquisar no banco de dados nome do usuario referente a palavra digitada

try{

    $sql = "SELECT * FROM arquivos WHERE nome LIKE " . $arquivos . " LIMIT 10";

    $stmt = $conect->prepare($sql);

    $stmt->execute();


    if ( $stmt->rowCount() > 0){
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo '<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>

        <th>Nome</th>
        <th>Tamanho</th>
        <th>Data de importação</th>
        <th>Ações</th>

      </tr>
    </thead>
    <tbody id="result">';

        foreach ( $rows as $row){

            echo "<tr>
						
						<td>". $row['nome'] ."</td>
						<td>".$row['tamanho']."</td>
						<td>".$row['data']."</td>
						<td>
							<a href='visualizar_arquivo.php?acao=VISUALIZAR&id_arquivo=".$row['id_arquivo']."' target='_blank'><img src='imagens/pdf.png' style='width:30px; height:30px;cursor:pointer;'></a>
                            <a href='visualizar_arquivo.php?acao=DOWNLOAD&id_arquivo=".$row['id_arquivo']."' target='_blank'><img src='imagens/download.png' style='width:30px; height:30px;cursor:pointer;'></a>
                            <a href='#' onclick='excluir_arquivo(".$row['id_arquivo'].");'><img src='imagens/delete.png' style='width:30px; height:30px;cursor:pointer;'></a>";
/*
            if ( $_SESSION['tipoDeUsuario'] == "adm" || true ){
                echo "<a href='#' onclick='excluir_arquivo(".$row['id_arquivo'].");'><img src='imagens/delete.png' style='width:30px; height:30px;cursor:pointer;'></a>";
            }
*/
            echo "</td></tr>";
        }

        echo '    </tbody>
  </table>
  </div>';

    }else{
        echo "Nenhum usuário encontrado ...";
    }
}catch(Exception $e){
    echo "Erro: \n Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
}
?>


