<?php require('../topo_admin.php');?>



	<form id="form_veiculo" name="form_veiculo" method="post" action="salvar.php" class="form_veiculo">

			

				<div class="agrupamento_veiculo">
					
					<div><h1>CADASTRAR VEICULO</h1></div>

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


					<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>
						
				</div>


		</form>

</body>

</html>