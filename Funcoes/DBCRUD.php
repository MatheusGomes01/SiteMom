<?php
	
	function consulta($link, $sql){

		try {
			$result = mysqli_query($link, $sql);
			$dados = mysqli_fetch_array($result);	
			$Message = $dados;

			return $Message;
		} catch (Exception $e) {
			$Message = "Error";
			return $Message;
		}
	}

	function inserir($link, $sql){

		$Message = "Indefinida";;

		try {
			mysqli_query($link, $sql);	
			$Message = "success";
		} catch (Exception $e) {
			$Message = "Error";
		}

		return $Message;
	}
?>