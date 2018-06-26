<html>
<head>
    <title>Autenticando...</title>
    <script type="text/javascript">
        function loginefetuado(){
            setTimeout("window.location='pesquisar.php'",3000);
        }
        //function loginfalhou(){
        //setTimeout("window.location='Index.php'", 3000);
        //}
    </script>
</head>
<body>

<?php
if(isset($_POST['btn_enviar'])){
    include_once 'con_pdo.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];



    try{
        $sentenca = $conect->prepare("SELECT * FROM cadastro WHERE email = :email AND senha = :senha");
        $sentenca->bindparam(':email', $email, PDO::PARAM_STR);
        $sentenca->bindparam(':senha', $senha, PDO::PARAM_STR);

        if ($sentenca->execute()) {
            session_start();
            WHILE($reg = $sentenca->fetch(PDO::FETCH_ASSOC)){
                $_SESSION['email'] = $reg['email'];
                $_SESSION['senha'] = $reg['senha'];
            }
            echo  "<strong><center><br/>VOCÊ FOI LOGADO COM SUCESSO! </center></strong>";
            echo "<script>loginefetuado()</script>";
        }
        echo "<br/><strong><center>AGUARDE...</center></strong>";

        //echo "<script>loginfalhou()</script>";


    }catch(PDOExeption $e){
        echo "erro inesperado!" . $e->getMenssage();
    }

}
?>
</body>
</html>	








