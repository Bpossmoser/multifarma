<?php
    include("conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $data_cadastro = $_POST['datac'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $foto= $_POST['foto'];
   

    $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso,  quantidade, preco, foto) VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso',  '$quantidade', '$preco', '$foto',)";

  
    mysqli_close($conexao);    

?>