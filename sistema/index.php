<?php

    session_start();

        if ((!isset($_SESSION['codCli'])== true) && (!isset($_SESSION['nome'])== true) && (!isset($_SESSION['email'])== true)) {

            header('Location: index1.php');
        }
?>
<!DOCTYPE html>
<html>
<?php
include 'cabecalho.php';
?>
<br>

<section>
    <div class="container">
        <div class="card" style="width: 18rem;">
        </div>

     <li class="fab fa-angellist list-group-item"><h1>Inicia uma Nova Venda</h1></li>

    <li class="fab fa-angellist list-group-item">Ao clicar em iniciar venda, o sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total</li>
    <li class="fab fa-angellist list-group-item">Na próxima tela será solicitada a data da NF</li>
    <li class="fab fa-angellist list-group-item">O valor total será atualizado após a inserção dos itens de nota fiscal</li>
<br>
<div class="centro">
    <form action="data_nf.php" method="post">
        
 
        <input type="submit" class="btn btn-outline-info" value="Iniciar Venda">
    </form> 
</div>
  <br> 
<div class="container">
        <div class="card" style="width: 18rem;">
        </div>

     <li class="fab fa-angellist list-group-item"> <h1>Outras Opções</h1></li>

    <li class="fab fa-angellist list-group-item"> <a href="ver_nf.php">Ver Notas Emitidas</a></li>
    <li class="fab fa-angellist list-group-item"><a href="mostra_produto.php">Ver Produtos</a></li>
    <li class="fab fa-angellist list-group-item"><a href="cadastro_prod.php">Cadastrar Produtos</a></li>
    <li class="fab fa-angellist list-group-item"><a href="logout.php">Sair</a></li>

    </div>
</section>

</body>
</html>
