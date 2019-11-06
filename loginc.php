
<?php

include("conexao.php");

session_start();
$email = $_POST['email'];


echo $email,"<br>";

$senha = hash('sha256', $_POST['senha']);



if ($conexao == true)
{
    echo "conectou";
    $resultado_comando = mysqli_query($conexao,"SELECT email, senha, nome, id FROM cadastro_cliente WHERE email = '$email' AND senha = '$senha'; ");

    $res = mysqli_num_rows($resultado_comando);
    $nome= mysqli_fetch_assoc($resultado_comando);
    if ($res> 0) {
        
        $id = $nome['id'];
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome['nome'];
        header("location:shop.php?id=$id");
        }
    else {

         unset ($_SESSION['email']);
         unset ($_SESSION['senha']);
         unset ($_SESSION['nome']);
         header('location:login_usuario.html');
         
    }
}
else{
    echo "foi não";
}
?>