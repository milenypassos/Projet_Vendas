<?php
	session_start();
	include 'conecta.php';

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$consulta = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";

	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;

	$registro_usuario= mysqli_fetch_assoc($resultado);

	if ($registros == 1) {
		$_SESSION['codCli'] = $registro_usuario['codCli'];
		$_SESSION['email'] = $registro_usuario['email'];
		$_SESSION['senha'] = $registro_usuario['senha'];
		header('Location: index.php');
	}
	else{
		header('Location: index1.php');
	}
?>