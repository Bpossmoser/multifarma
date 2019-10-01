<?php

$email = $_POST['email'];
echo $email, "<br>";

$senha = $_POST ['senha'];
echo hash('sha256', $senha);

$conexao = mysqli_connect("localhost","root","root","multifarma",3307);

if ($conexao == true){

    echo "foi";

    $resultado_comando = mysqli_query($conexao,"INSERT INTO USUARIOS VALUES('$email','$senha');");
    if($resultado_comando == true)
    {
        echo "amém Deus";
    }
    else {
        echo "que pena, mais um jogo da vida";
    }
}
else{
    echo "queimaaa";
}

?>
