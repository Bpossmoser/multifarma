<?php

include("conexao.php");

session_start();
$email = $_POST['email'];


echo $email,"<br>";

$senha = hash('sha256', $_POST['senha']);

if ($conexao == true)
{
    echo "conectou";
    $resultado_comando = mysqli_query($conexao,"SELECT email, senha FROM cadastro_cliente WHERE email = '$email' AND senha = '$senha'; ");

    $res = mysqli_num_rows($resultado_comando);
    if ($res> 0) {

        echo "Encontrei no banco!<br>";
        $_SESSION ['logado'] = $email;
        header ('Location: shop.php');
    }
    else {

        echo "Ninguém com esse login e senha <br>";
    }
}
else{
    echo "foi não";
}
?>