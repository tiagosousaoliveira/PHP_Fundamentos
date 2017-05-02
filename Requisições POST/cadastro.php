<?php

	$nome        = $_GET["nome"];
	$email       = $_GET["email"];
	$profissao   = $_GET["profissao"];
	$endereco    = $_GET["endereco"];

	$conn = new mysqli("hostname","usuaio","senha","nome do banco");
	$sql  = "INSERT INTO nome da tabela (nome,email,profissao,endereco) VALUES (?,?,?,?)";
	$stm  = $conn->prepare($sql);

	$stm->bind_param("ssss",$nome,$email,$profissao,$endereco);

	if($stm->execute()){
		echo "Gravado com Sucesso";
	}else {
		echo "Erro na Gravação";
	}

	$stm->close();
	$conn->close();

?>