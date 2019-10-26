<?php
include("conexao.php");

$razao = $_POST['razao'];
$fantasia= $_POST['fantasia'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$inscricao_est = $_POST['inscricao_est'];
$inscricao_mun = $_POST['inscricao_mun'];
$logradouro = $_POST['logradouro'];
$num_local = $_POST['num_local'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$query_select = "SELECT email FROM cadfarmacia WHERE email = '$email'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
$imagetmp= addslashes (file_get_contents($_FILES['foto']['tmp_name']));
    //$foto= $_POST['foto'];

    $imagetmp = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    //$imagetmp = $_FILES['foto']['tmp_name'];

$senha = hash('sha256', $_POST['senha']);
$senha2 = hash('sha256', $_POST['senha2']);


   if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse email já existe');
        location.href = 'cadas_farmacia.php'; 
        </script>";
     
       
       die(); 
    }
   
//}

$sql="INSERT INTO cadfarmacia (razao,fantasia,email,cnpj,inscricao_est,inscricao_mun,logradouro,senha,num_local,bairro,complemento,cep,cidade,uf,telefone) VALUES ('$razao','$fantasia','$email','$cnpj','$inscricao_est','$inscricao_mun','$logradouro','$senha','$num_local','$bairro','$complemento','$cep','$cidade','$uf','$telefone')";




if(mysqli_query($conexao,$sql)){
    echo "Cadastro feito <br>";
    echo "<a href='cadas_farmacia.php'>Voltar</a>";
   //header ('location:pagina_inicial.html');
}
else {
    echo "Error: ".$sql.mysqli_error($conexao);
}

mysqli_close($conexao);

?>