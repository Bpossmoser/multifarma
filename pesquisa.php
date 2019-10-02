<?php

include("conexao.php");

$pesquisa=$_POST['pesquisa'];

$sqli = mysqli_query($conexao,"SELECT * FROM produtos WHERE LIMIT '%$pesquisa%' 5 '");
$row_prof = mysqli_fetch_assoc($sqli);
$Resu = mysqli_num_rows($sqli); 
if ($Resu > 0) {
    while ($Resu) {
     ?>
     <html>
     <body>
     <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="produto.php"> <img src="<?php $row_prof[''] ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="produto.php"><?php $row_prof['nome_produto'] ?></a></h3>
            <p class="price"><?php $row_prof['preco'] ?></p>
          </div>    
     </body>
     </html>
    }
}
<?php
else{
    echo"Esse produto não foi encontrado";
}



?>
