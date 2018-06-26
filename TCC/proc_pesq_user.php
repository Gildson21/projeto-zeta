<?php
//Incluir a conexão com banco de dados
include_once 'con_pdo.php';

$arquivos = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$sql = "SELECT * FROM arquivos WHERE nome LIKE '%:arquivos%' LIMIT 10";

try{
    $stmt = $conect->prepare($sql);

    $stmt->bindValue(   ':arquivos', $arquivos);

    $stmt->execute();

    if ( $stmt->rowCount() > 0){
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row){
            echo "<li>".$row['nome']."</li>";
        }

    }else{
        echo "Nenhum usuário encontrado ...";
    }
}catch(Exception $e){
    echo "Erro: \n Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
}
