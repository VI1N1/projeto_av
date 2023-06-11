<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "db_portal";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/portal_av";

	$url_admin = "http://".$host_ip."/portal_av/admin";

	$url_usuario = "http://".$host_ip."/portal_av/index2.php";


?>