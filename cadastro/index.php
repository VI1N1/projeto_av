<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/portal_av/css/style_login.css">
		<title>Portal</title>
	</head>

	<body>
		<form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post" action="cadastrar.php">
				<div class="agrupamento_login">
					<div>
						<div>
							<h1>CADASTRAR</h1>
						</div>
						<div>
							<label>Nome completo</label>

							<input type="text" id="nome_completo_login" name="nome_completo_login" required autofocus>
						</div>
						<div>
							<label>Nome de usuario</label>

							<input type="text" id="nome_login" name="nome_login" required>
						</div>
						<div>
							<label>Senha</label>

							<input type="password" id="senha_login" name="senha_login" required autofocus>
						</div>

						<div style=" display: flex; flex-direction: column;align-items: center;">
							<input type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
						</div>
					</div>	
					<div class="logo">
							<div>
								<img src="/portal_av/img/logo.png" class="logo_login">
							</div>
					</div>
				</div>
		</form>
				<div class="capa">
					<img src="/portal_av/img/carros.png" class="capa_login">
				</div>
	</body>
</html>