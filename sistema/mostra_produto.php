<center>
    <?php
  
        include 'conecta.php';
        include 'cabecalho.php';
    
        $consulta = "SELECT * FROM produtos";
                    
        foreach ($conexao -> query($consulta) as $linha) {

        echo "<br>";
        echo "ID : ".$linha['id'] ."<br>";
        echo "Nome: ".$linha['nome'] ."<br>";
        echo "Preço: R$ ".$linha['preco'] ."<br><hr>";                          
         }
    ?>
    <p><a href="index.php">Voltar</a></p>
    <br>
    <br>
    </center>
</body>
</html>