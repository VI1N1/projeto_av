<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/curso.css">
	<title>Cadastrar Curso</title>
</head>
<body>
		<form id="form_curso" name="form_curso" class="form_curso" method="post" action="valida_curso.php">
			<div>
				<h1>CADASTRAR CURSO</h1>
			</div>
				<div class="agrupamento_login">
					<div>
						<div>
							<label>Digite o nome do curso</label>
						</div>	
						<div>
							<input type="text" id="nome_curso" name="nome_cuso" maxlength="50">
						</div>
						<div>
							<label>Carga Horária</label>
						</div>
						<div>
							<input type="time" id="carga_horária" name="carga_horária" maxlength="7">
						</div>
					</div>
				</div>
				<div>
					<input type="submit" id="btn_salvar" name="btn_entrar" value="Salvar">
				</div>			
			</div>
		</form>
</body>
</html>
