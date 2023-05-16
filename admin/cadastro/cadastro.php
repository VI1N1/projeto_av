<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/cadastro.css">
	<title>Cadastro de Aluno</title>
</head>
<body>
		<form id="form_curso" name="form_curso" class="form_curso" method="post" action="valida_cadastroa.css">
			<div>
				<h1>CADASTRAR ALUNO</h1>
			</div>
				<div class="agrupamento_login">
					<div>
						<div>
							<label> Nome Completo</label>
						</div>				
							<input type="text" id="nome_completo" name="nome_completo" required autofocus>
						<div>
							<label> CPF</label>
						</div>
							<input type="text" id="cpf" name="cpf" required autofocus>
						<div>
							<label> Data de Nascimento</label>
						</div>
							<input type="date" id="data_nascimento" name="data_nascimento" required autofocus>		
						<div>
							<label> RG</label>
						</div>												
							<input type="text" id="rg" name="rg" required autofocus>					
					</div>
				</div>
				<div>
					<input type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
				</div>	
			</div>
		</form>
</body>
</html>
