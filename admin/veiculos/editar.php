<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_veiculo = $_GET['codigo_veiculo'];


	$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo WHERE codigo_veiculo = $codigo_veiculo");
				
	
		if (mysqli_num_rows($select_veiculo) > 0) {
			
			$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/veiculos';</script>";
			
			
		}
	

?>


		<form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div><h1>ATUALIZAR VEICULO</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Código</label></div>	

							<div><input type="text" id="codigo_veiculo" name="codigo_veiculo" value="<?php echo $dados_veiculo['codigo_veiculo'];?>" readonly></div>

						</div>

						<div>
							<div><label>Marca</label></div>	

							<div><input type="text" id="marca_veiculo" name="marca_veiculo" value="<?php echo $dados_veiculo['marca_veiculo'];?>" required autofocus></div>

						</div>	

						<div>
							<div><label>Modelo</label></div>	

							<div><input type="text" id="modelo_veiculo" name="modelo_veiculo" value="<?php echo $dados_veiculo['modelo_veiculo'];?>" required autofocus></div>

						</div>

						<div>
							<div><label>Descrilção</label></div>	

							<div><input type="text" id="descricao_veiculo" name="descricao_veiculo" value="<?php echo $dados_veiculo['descricao_veiculo'];?>" required autofocus></div>

						</div>

						<div>
							<div><label>Ano</label></div>	

							<div><input type="text" id="ano_veiculo" name="ano_veiculo" value="<?php echo $dados_veiculo['ano_veiculo'];?>" required autofocus></div>

						</div>

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>