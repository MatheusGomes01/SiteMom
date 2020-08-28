<?php
	session_start();
	
	require '../conn.php';
	require '../Funcoes/DBCRUD.php';
	
	global $_SESSION;

	switch ($_POST["username"][0]) {
		case '0':
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':
		case '6':
		case '7':
		case '8':
		case '9':
			$username = md5($_POST["username"]);
			break;
		
		default:
			$username = $_POST["username"];
			break;
	}

	$senha = md5($_POST["senha"]);
	$sql = "select * from `usuario` where (Email = '$username' or CPF = '$username') and senha = '$senha'"; 
	$consulta =  consulta($link, $sql);

	if ($consulta != "Error") {

		$_SESSION["Id"] = $consulta["Id"];
		$_SESSION["Nome"] = $consulta["Nome"];

		header("Location: ../Home.php");
	}
	//echo $sql;
	//die;
	//var_dump($consulta);
?>