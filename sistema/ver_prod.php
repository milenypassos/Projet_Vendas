<!DOCTYPE html>
<html>
<center>
<?php
include 'cabecalho.php';
?>
<br>
<?php 

	include 'conecta.php';

	$consulta="SELECT * FROM produtos";

	foreach ($conexao -> query($consulta) as $linha) {
		echo "Produtos: ".$linha['id']."<br><hr>";
		echo "Nome: ".$linha['nome']."<br><hr>";
		echo "Valor Unit: ".$linha['preco']."<br><hr>";

				echo "<hr>";
	}
				echo "<br>";

 ?>
 <p><a href="index.php"></a></p>
 
 </center>
</body>
</html>
