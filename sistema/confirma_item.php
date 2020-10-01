<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <?php
    include 'cabecalho.php';
    include 'conecta.php';
    echo"<br><br>";
    session_start();
    $nf = $_SESSION['nf'];
?>
<div class="container">
        <div class="card" style=";">
        </div>
<?php
    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";
    echo "<h1>NF: ".$nf ."</h1><br><hr>";
    $total = 0;
    foreach ($conexao -> query($consulta) as $linha){
        
        echo "Cod Produto: ".$linha['cod_produto'] ."<br>";
        echo "Qtde: ".$linha['qtde'] ."<br>";
        echo "Subtotal: R$ ".$linha['subtotal'] ."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }
    echo "<b> Total da Nota R$ ".$total."</b><hr>";
    ?>



    <li class="fab fa-angellist list-group-item"><h1>O que deseja fazer?</h1></li>
     <li class="fab fa-angellist list-group-item"><a href="seleciona_ultima_nf.php">Inserir outro produto</a></li>
     <li class="fab fa-angellist list-group-item"><a href="finalizar.php?total=<?php echo $total; ?>">Finalizar nota fiscal</a></li>
 </div>
</body>
</html>