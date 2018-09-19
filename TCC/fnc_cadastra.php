<html>
<head>
    <title>Cadastrando...</title>
    <script type="text/javascript">
        function cadastrando(){
            setTimeout("window.location='pesquisar.php'",3000);
        }
    </script>
</head>
<?php
if(isset($_POST['bt_enviar'])){
    include_once 'con_pdo.php';


    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // $tipoDeUsuario == usuarioComum;

    try{
        $sentenca = $conect->prepare("INSERT INTO cadastro (nome, sexo, data_nascimento, email, senha)
		VALUES (:nome, :sexo, :data_nascimento, :email, :senha)");

        $sentenca->bindparam(':nome', $nome, PDO::PARAM_STR);
        $sentenca->bindparam(':sexo', $sexo, PDO::PARAM_STR);
        $sentenca->bindparam(':data_nascimento', $data_nascimento, PDO::PARAM_STR);
        $sentenca->bindparam(':email', $email, PDO::PARAM_STR);
        $sentenca->bindparam(':senha', $senha, PDO::PARAM_STR);


        // $sentenca->bindparam(':tipoDeUsuario', $tipoDeUsuario, PDO::PARAM_STR);


        $executar = $sentenca->execute();
        if($executar){
            echo "<script>cadastrando()</script>";
            echo "<br/><strong><center>CADASTRO REALIZADO COM SUCESSO!</center></strong>";
            echo "<br/><strong><center>AGUARDE...</center></strong>";


        }
    }catch(PDOExeption $e){
        echo "Erro inesperado!" . $e->getMenssage();
    }
}
?>
</body>
</html>	