<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_veiculo'])) {

		$codigo_veiculo = $_POST['codigo_veiculo'];      
	
		$modelo_veiculo = $_POST['modelo_veiculo'];


		$update_veiculo = "UPDATE veiculo SET modelo_veiculo = '".$modelo_veiculo."' WHERE codigo_veiculo = $codigo_veiculo";
	
	
		if (mysqli_query($conexao,$update_veiculo)) {

				mysqli_close($conexao);

				echo "<script> alert ('CURSO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/curso';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['modelo_veiculo'])) {      
	
		$nome_curso = $_POST['nome_curso'];


		$insert_curso = "INSERT INTO curso (nome_curso) VALUES ('".$nome_curso."')";
	
	
		if (mysqli_query($conexao,$insert_curso)) {

				mysqli_close($conexao);

				echo "<script> alert ('CURSO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/curso';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>