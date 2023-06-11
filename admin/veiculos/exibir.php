<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo ORDER BY codigo_veiculo ASC");
				
	
		if (mysqli_num_rows($select_veiculo) > 0) {
			
			$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/veiculos';</script>";
			
			
		}

?>



		<div class="estila_tabela">

			<div><h1>VEICULOS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>MARCA</td>
						<td>MODELO</td>
						<td>DESCRIÇÃO</td>
						<td>ANO</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_veiculo['codigo_veiculo'];?></td>
						<td><?php echo $dados_veiculo['marca_veiculo'];?></td>
						<td><?php echo $dados_veiculo['modelo_veiculo'];?></td>
						<td><?php echo $dados_veiculo['descricao_veiculo'];?></td>
						<td><?php echo $dados_veiculo['ano_veiculo'];?></td>
						<td>

							<a href="editar.php?codigo_veiculo=<?php echo $dados_veiculo['codigo_veiculo'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="excluir.php?codigo_veiculo=<?php echo $dados_veiculo['codigo_veiculo'];?>">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo));?>

				</table>

		</div>

</body>

</html>