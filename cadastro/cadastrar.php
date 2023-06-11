<?php require('../conexao.php');


	if (isset($_POST['nome_login'])) {      
	
		$nome_completo_login = $_POST['nome_completo_login'];
		$nome_login = $_POST['nome_login'];
		$senha_login = md5($_POST['senha_login']);

		$valida_usuario = mysqli_query($conexao, "SELECT * FROM login WHERE nome_login = '".$nome_login."'");

		if(mysqli_num_rows($valida_usuario) > 0){
			 echo "<script> alert ('NOME DE USUARIO JA EM USO');</script>";
			 echo "<script> window.location.href='../cadastro';</script>";
		}
		else{

		$insert_usuario = "INSERT INTO login (nome_completo_login,nome_login,senha_login,tipo_login) VALUES ('".$nome_completo_login."','".$nome_login."','".$senha_login."', 1)";

		}
	
	
		if (mysqli_query($conexao,$insert_usuario)) {

				mysqli_close($conexao);

				echo "<script> alert ('VOCÊ FOI CADASTRADO COM SUCESSO!');</script>";

				
				echo "<script> window.location.href='../login';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='/cadastro';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>