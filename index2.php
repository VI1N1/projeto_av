<?php session_start();

	if (!isset($_SESSION['nome_login'])) {	
	    
	    session_destroy();
	 
	    unset ($_SESSION['nome_login']);
	    unset ($_SESSION['tipo_login']);

		echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
		
		echo "<script> window.location.href='http://localhost/portal_av/login';</script>";

	}	

	if ($_SESSION['tipo_login'] < 1) {

		echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA!');</script>";					
		session_destroy();
	 
		unset ($_SESSION['nome_completo_login']);
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['tipo_login']);

		unset ($_SESSION['url']);
		unset ($_SESSION['url_admin']);
		unset ($_SESSION['url_usuario']);

		echo "<script> window.location.href='http://localhost/portal_av';</script>";				

	} 


?>

<?php require('conexao.php');


	$select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo ORDER BY codigo_veiculo ASC");
				
	
		if (mysqli_num_rows($select_veiculo) > 0) {
			
			$dados_veiculo = mysqli_fetch_assoc($select_veiculo);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/veiculos';</script>";
			
			
		}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/portal_av/css/style_home.css">
	<title>Admin</title>
</head>
<body>

	<header>

		<div class="container">

			<div class="logo">
				<img src="/portal_av/img/logo.png">
				<h3>Auto
					<div><h3>Turismo</h3></div>
				</h3>
			</div>

			<div class="menu_section">
				<div class="menu_toggle">
					
				</div>
					<label><?php echo $_SESSION['nome_completo_login'];?></label>
				</div>
				<div>
				<nav>
					<ul>
						<li><a href="sair.php">SAIR</a></li>
					</ul>
				</nav>			
			</div>
		</div>
	</header>

	<div>
    	<p>Curta suas ferias com luxo</p>
    	<h1>Alugue seu carro agora!</h1>
	</div>

	<div class="slider">

		<div class="slides">
			<!-- Butões de Radio -->
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">
			<input type="radio" name="radio-btn" id="radio5">
			<input type="radio" name="radio-btn" id="radio6">
			<!-- Fim Butões de Radio -->

			<!-- Imagens do Slide -->
			<div class="slide first">
				<img src="/portal_av/img/carro1.png" alt="Imagem 1">
			</div>
			<div class="slide">
				<img src="/portal_av/img/carro2.png" alt="Imagem 2">
			</div>
			<div class="slide ">
				<img src="/portal_av/img/carro3.png" alt="Imagem 3">
			</div>
			<div class="slide ">
				<img src="/portal_av/img/carro4.png" alt="Imagem 4">
			</div>
			<div class="slide ">
				<img src="/portal_av/img/carro5.png" alt="Imagem 5">
			</div>
			<div class="slide ">
				<img src="/portal_av/img/carro6.png" alt="Imagem 6">
			</div>
			<!--Fim das imagens-->

			<!-- Navegação automatica -->
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
				<div class="auto-btn5"></div>
				<div class="auto-btn6"></div>
			</div>
			<!--Fim da navegação automatica-->

		</div>

		<div class="manual-navigation">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
			<label for="radio5" class="manual-btn"></label>
			<label for="radio6" class="manual-btn"></label>
		</div>

	</div>

	<div class="lista">
		
		<div class="tabela_lista">

			<div class="texto">
				<h2>Lista de carros disponiveis</h2>
			</div>
			
			<?php do{

				?>


			<div>
				<div class="tabela first">
				
					<img src="/portal_av/img/carro1.png" alt="Imagem 1">

					<div class="info_tabela">
						<div class="descricao_vcl">Descrição: <td><?php echo $dados_veiculo['descricao_veiculo'];?></td></div>
						<div class="marca_vcl">Marca: <td><?php echo $dados_veiculo['marca_veiculo'];?></td></div>
						<div class="codigo_vcl">Codigo: <td><?php echo $dados_veiculo['codigo_veiculo'];?></td></div>
						<div class="modelo_vcl">Modelo: <td><?php echo $dados_veiculo['modelo_veiculo'];?></td></div>
						<div class="ano_vcl">Ano: <td><?php echo $dados_veiculo['ano_veiculo'];?></td></div>
					</div>
				</div>

				<div class="btn_alugar" style=" display: flex; flex-direction: column;align-items: center;">
					<a href="login">ALUGAR</a>
				</div>
			</div>

			<?php }while ($dados_veiculo = mysqli_fetch_assoc($select_veiculo));?>

		</div>

	</div>

	<footer>
        <div class="container-footer">
            <div class="row-footer">
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#"> Quem somos </a></li>
                        <li><a href=""> nossos serviços </a></li>
                        <li><a href=""> política de privacidade </a></li>
                        <li><a href=""> programa de afiliados</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Loja online</h4>
                    <ul>
                        <li><a href="#">Relógio</a></li>
                        <li><a href="#">Saco</a></li>
                        <li><a href="#">Calçado</a></li>
                        <li><a href="#">Endereço</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Se inscreva!</h4>
                    <div class="form-sub">
                        <form>
                            <input type="email" placeholder="Digite o seu e-mail" required>
                            <button>inscrever</button>
                        </form>
                    </div>

                    <div class="medias-socias">
                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                        <a href="#"> <i class="fa fa-instagram"></i> </a>
                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                    </div>

                </div>
                <!--end footer col-->
            </div>
        </div>
    </footer>

	<script src="/portal_av/script.js"></script>

</body>

</html>