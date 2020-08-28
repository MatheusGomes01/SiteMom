<?php

class connDataBase{

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';//'Escala7!';

	//banco de dados
	private $database = 'beteslanches';

	public function conecta_mysql(){

		//cria a conexao
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		
		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		//verificar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro na conexão do servidor: '.mysqli_connect_error();
		}

		return $con;

	}
}

$objBd = new connDataBase();
$link = $objBd->conecta_mysql();



?>  