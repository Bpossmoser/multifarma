<?php
    $servidor="localhost";
    $usuario="vsgfv5ppza02";
    $senha="@Multifarma123";
    $db="multifarma";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("Houve um erro".mysqli_connect_errno());
    
    }


?>