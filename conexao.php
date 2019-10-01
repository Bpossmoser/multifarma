<?php
    $servidor="mysql05-farm76.kinghost.net";
    $usuario="multifarma";
    $senha="pharma123";
    $db="multifarma";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$db);

    if(!$conexao){
        die("Houve um erro".mysqli_connect_errno());
    
    }


?>