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

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:shop.php');
        }
    else {

         unset ($_SESSION['email']);
         unset ($_SESSION['senha']);
         header('location:login_usuario.html');
   
    }
}
else{
    echo "foi não";
}
?>