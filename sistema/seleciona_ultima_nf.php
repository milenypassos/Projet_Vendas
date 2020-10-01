<?php

    include 'conecta.php';
   // echo "<br><hr>";

    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query ($consulta);
    $linha = $consulta-> fetch_assoc();
    $ultimo = $linha ['ultima'];
    //echo "Nota fiscal: ".$ultimo ."<br>";
   // echo "<hr>";

    session_start();
    $_SESSION['nf'] = $ultimo;

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<?php

    include 'cabecalho.php';

?>
<br>
<br>
<section>
    <div class="container">
        <div class="card" style="width: 18rem;">
        </div>

         <form action="insere_item.php?nf='<?php echo $ultimo;?>'" method="post">
              <li class="fab fa-angellist list-group-item">NF: <input type="text" name="nf" value="<?php echo $ultimo;?>"></li>
            <p>
                 <li class="fab fa-angellist list-group-item">Produto:
                <select name="produto_opcao" id="produto_opcao">
                <?php

                    $consulta = "SELECT * FROM produtos";
                    foreach ($conexao -> query ($consulta) as $linha){
                ?>
                        <option value="<?php echo $linha ['id'];?>"><?php echo $linha ['nome'];?></option>
                <?php
                    }
                ?>
                </select></li>
            </p>
            <p>
             <li class="fab fa-angellist list-group-item">Qtde: <input type="text" name="qtde"></li>
            </p>
            <input class="btn btn-outline-info" type="submit" value="Adicionar">
         </form>
     </div>
 </section>
</body>
</html>