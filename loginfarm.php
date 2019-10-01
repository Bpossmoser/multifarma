<?php
include("conexao.php");

session_start();

   //if(isset($_POST['email'])){
    $email = $_POST['email'];
    
    
    //echo $email,"<br>";
    
    $senha = $_POST['senha'];
    
    if ($conexao == true){
        $resultado_comando = mysqli_query($conexao,"SELECT * FROM cadfarmacia WHERE email = '$email' AND senha = '$senha'; ");
    
        $res = mysqli_num_rows($resultado_comando);
        if ($res> 0) {
            
            // retorno do select se o ligin for encontrado
            $row = mysqli_fetch_assoc($resultado_comando);
            
            $_SESSION ['logado'] = $row["razao"];
            echo "Deu certo ".$row['razao'];
        }
        else {
    
            echo "Ninguém com esse login e senha <br>";
        }
    }
  
?>