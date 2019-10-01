<?php
include("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$date = $_POST['date'];
$email = $_POST['email'];
$query_select = "SELECT email FROM cadastro_cliente WHERE email = '$email'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];



$senha = hash('sha256', $_POST['senha']);
$senha2 = hash('sha256', $_POST['senha2']);

if (strcmp( $senha,  $senha2) != 0 ){
    echo "erro";
    header ('location:cadas_cliente.php?erro=senha');
    die();
}
else {
    if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');
        </script>";
        header ('location:cadas_cliente.php?erro=email');
       
        die(); 
    }
   
}





$sql="INSERT INTO cadastro_cliente (nome,cpf,telefone,data_nasc,email,senha) VALUES ('$nome','$cpf','$telefone','$date','$email','$senha')";

if(mysqli_query($conexao,$sql)){
    echo "Cadastro feito";
    header ('location:login_usuario.html');
}
else {
    echo "Error: ".$sql.mysqli_error($conexao);
}

mysqli_close($conexao);

?>