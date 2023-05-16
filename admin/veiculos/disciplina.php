<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/cadastro.css">
	<!-- Mudar estilização para "../../css/disciplina.css" -->
	<title>Cadastrar Disciplina</title>
</head>
<body>
		<form id="form_curso" name="form_curso" class="form_curso" method="post" action="valida_cadastroa.css">
			<div>
				<h1>CADASTRAR DISCIPLINA</h1>
			</div>
				<div class="agrupamento_login">
					<div>
						<div>
							<label> Codigo do Curso</label>
						</div>				
							<input type="text" id="nome_completo" name="nome_completo" required autofocus>
						<div>
							<label> Nome da Disciplina</label>
						</div>
							<input type="text" id="cpf" name="cpf" required autofocus>
						<div>
							<label>Carga Horária</label>
						</div>
						<div>
							<input type="time" id="carga_horária" name="carga_horária" maxlength="7">
						</div>			
					</div>
				</div>
					<div>
						<input type="submit" id="btn_salvar" name="btn_salvar" value="Salvar">
					</div>	
				</div>
		</form>
</body>
</html>
