<?php
include("conexao.php");

session_start();

  
    $email = $_POST['email'];
    
    
   
    
    $senha = hash('sha256', $_POST['senha']);
    
    if ($conexao == true){
        $resultado_comando = mysqli_query($conexao,"SELECT * FROM cadfarmacia WHERE email = '$email' AND senha = '$senha'; ");
    
        $res = mysqli_num_rows($resultado_comando);
        if ($res> 0) {
            
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location:pagina_inicial.php');
            }
        else {
    
             unset ($_SESSION['email']);
             unset ($_SESSION['senha']);
             header('location:login_farmacia.html');
       
        }
    }
  
?>