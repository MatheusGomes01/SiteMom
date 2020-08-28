<?php
	require '../conn.php';
	require '../Funcoes/DBCRUD.php';

	$nome = $_POST["nome"];
	$nascimento = $_POST["nascimento"];
	$cpf = md5($_POST["cpf"]);
	$email = $_POST["email"];
	$senha = md5($_POST["senha"]);
	$cep = $_POST["cep"];
	$rua = $_POST["rua"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$numero = $_POST["numero"];
	$telefone = $_POST["telefone"];

	$sql = "insert into `usuario` (`Nome`, `CPF`, `Email`, `Nascimento`, `Senha`, `Endereco`, `Numero`, `CEP`, `Telefone`) VALUES ('$nome','$cpf','$email','$nascimento','$senha','$rua','$numero','$cep','$telefone')"; 
	$inserir =  inserir($link, $sql);

	if ($inserir != "Error" ) {
		header("Location: ../Home.php");	
	}
	//echo $sql." <br>".$inserir;
	//die;
?>