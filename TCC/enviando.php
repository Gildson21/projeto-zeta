<html>
<head>
<title>Enviando...</title>
<script type="text/javascript">
function enviado(){
	setTimeout("window.location='Index.php'",3000);
}
</script>
<?php
if(isset($_POST['btn_msg'])){
	include_once 'con_pdo.php';
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	try{
		$sentenca = $conect->prepare("INSERT INTO msg (nome, email, assunto, mensagem)
		VALUES (:nome, :email, :assunto, :mensagem)");
		
		$sentenca->bindparam(':nome', $nome, PDO::PARAM_STR);
		$sentenca->bindparam(':email', $email, PDO::PARAM_STR);
		$sentenca->bindparam(':assunto', $assunto, PDO::PARAM_STR);
		$sentenca->bindparam(':mensagem', $mensagem, PDO::PARAM_STR);
	
	$executar = $sentenca->execute();
		if($executar){

			echo "<script>enviado()</script>";
			echo  "<strong><center><br/>MENSAGEM ENVIADA COM SUCESSO! </center></strong>";
			echo "<br/><strong><center>AGUARDE...</center></strong>";
			
		}
	}catch(PDOExeption $e){
		echo "Erro inesperado!" . $e->getMenssage();
	}		
	}
?>
</body>
</html>	
