<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sistema";

	$conexao = new MySQLi("$host","$usuario","$senha","$banco");

	if ($conexao -> connect_error) {
		echo "Erro de Conexão!";
	}
	else{
		//echo "Conectado ao Banco de Dados: aula_php <br>";
	}
?>