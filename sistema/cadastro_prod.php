<!DOCTYPE html>
<html>
<?php
include 'cabecalho.php';
?>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <br><br>
    <section>
    <div class="container">
        <div class="card" style="width: 18rem;">
        </div>
    <li class="fab fa-angellist list-group-item"><h1>Novo Produto</h1></li>

    <form action="inserir_prod.php" method="POST">
                        
      <li class="fab fa-angellist list-group-item"><label for="text-input"><h2>Nome</h2></label>    
        <input type="text" id="text-input" name="nome" placeholder="Nome"></li>                

        <li class="fab fa-angellist list-group-item"><label for="text-input"><h2>Valor Unitário</h2></label>            
            <input type="text" id="text-input" name="preco" placeholder="Preco"></li>
<br>
        <input class="btn btn-outline-info" type="submit" value="Cadastrar">
                           
        
     </form>   
     </div>
     </section>                   
</body>
</html>
