<?php require('../topo_admin.php');?>



	<form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div><h1>CADASTRAR VEICULO</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Marca do veiculo</label></div>	

							<div><input type="text" id="marca_veiculo" name="marca_veiculo" required autofocus></div>

						</div>

						<div>
							<div><label>Modelo do veiculo</label></div>	

							<div><input type="text" id="modelo_veiculo" name="modelo_veiculo" required autofocus></div>

						</div>

						<div>
							<div><label>Descrição do veiculo</label></div>	

							<div><input type="text" id="descricao_veiculo" name="descricao_veiculo" required autofocus></div>

						</div>

						<div>
							<div><label>Ano do veiculo</label></div>	

							<div><input type="text" id="ano_veiculo" name="ano_veiculo" required autofocus></div>

						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>