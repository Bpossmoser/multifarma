<?php
include("conexao.php");

session_start();

  
    $email = $_POST['email'];
   
    
    $senha = hash('sha256', $_POST['senha']);
    
    if ($conexao == true){
        $resultado_comando = mysqli_query($conexao,"SELECT * FROM cadfarmacia WHERE email = '$email' AND senha = '$senha'; ");
        $Associa = mysqli_fetch_assoc($resultado_comando);
    
        $res = mysqli_num_rows($resultado_comando);
        if ($res> 0) {
            
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $id = $Associa['id'];
            header("location:indexfarmacia.php?id=$id");
            }
        else {
    
             unset ($_SESSION['email']);
             unset ($_SESSION['senha']);
             header('location:login_farmacia.html');
       
        }
    }
  
?>