<!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <?php

    include 'cabecalho.php';

?>
<center>
<?php

    include 'conecta.php';
    echo "<br>";

    session_start();
    $nf = $_SESSION['nf'];
    echo "<b>Numero da NF: " . $nf . "</b><br>";
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco,nome FROM produtos WHERE id = '$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    //print_r($linha);
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco * $qtde_prod;
?>
</center>
<section>
    <div class="container">
        <div class="card" style="width: 18rem;">
        </div>

<form action="insere_item_nf.php" method="POST">
    <li class="fab fa-angellist list-group-item"><p>
        ID produto: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>"
        readonly="readonly">
    </p></li>
    <li class="fab fa-angellist list-group-item"><p>
        Produto: <input type="text" name="nome_prod" value="<?php echo $nome; ?>"
        readonly="readonly">
    </p></li>
    <li class="fab fa-angellist list-group-item"><p>
        Valor unit: <input type="text" name="valor_unit" value="<?php echo $preco; ?>"
        readonly="readonly">
    
    </p></li>
    <li class="fab fa-angellist list-group-item"><p>
        Qtde: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>"
        readonly="readonly">
    
    </p></li>
    <li class="fab fa-angellist list-group-item"><p>
        Subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>"
        readonly="readonly">
    
    </p></li>
    <br>
    <input class="btn btn-outline-info" type="submit" value="Adicionar Produto">

</form>
</div>
</section>
  
 </body>
 </html>