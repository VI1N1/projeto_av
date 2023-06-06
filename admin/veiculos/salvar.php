<?php require('../../conexao.php');

	
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_veiculo'])) {

		$codigo_veiculo = $_POST['codigo_veiculo'];      
	
		$modelo_veiculo = $_POST['modelo_veiculo'];

		$marca_veiculo = $_POST['marca_veiculo'];      
	
		$descricao_veiculo = $_POST['descricao_veiculo'];

		$ano_veiculo = $_POST['ano_veiculo'];   

		$update_veiculo = "UPDATE veiculo SET modelo_veiculo = '".$modelo_veiculo."', marca_veiculo = '".$marca_veiculo."', descricao_veiculo = '".$descricao_veiculo."', ano_veiculo = '".$ano_veiculo."' WHERE codigo_veiculo = $codigo_veiculo";
	
	
		if (mysqli_query($conexao,$update_veiculo)) {

				mysqli_close($conexao);

				echo "<script> alert ('CURSO ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/veiculos/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/veiculos';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['modelo_veiculo'])) {      
	
		$marca_veiculo = $_POST['marca_veiculo'];
		$modelo_veiculo = $_POST['modelo_veiculo'];
		$descricao_veiculo = $_POST['descricao_veiculo'];
		$ano_veiculo = $_POST['ano_veiculo'];


		$insert_veiculo = "INSERT INTO veiculo (marca_veiculo,modelo_veiculo,descricao_veiculo,ano_veiculo) VALUES ('".$marca_veiculo."','".$modelo_veiculo."','".$descricao_veiculo."','".$ano_veiculo."')";
	
	
		if (mysqli_query($conexao,$insert_veiculo)) {

				mysqli_close($conexao);

				echo "<script> alert ('VEICULO CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/veiculos/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/veiculos';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>