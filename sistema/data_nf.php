<?php
include 'conecta.php';

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


    <form action="gera_nf.php" method="post">

         <li class="fab fa-angellist list-group-item"><h1>Insira a data da venda</h1></li>
        <li class="fab fa-angellist list-group-item">DATA: <input type="date" name="data"></li>
        <br>
        <input class="btn btn-outline-info" type="submit" value="Continuar">
    
    </form>
 	</div> 
 </section>
</body>
</html>

