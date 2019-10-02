<?php
    include("conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $data_cadastro = $_POST['datac'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    // $foto= $_POST['foto'];
   

    $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso,  quantidade, preco) VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso',  '$quantidade', '$preco')";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro feito";
    }
    else {
        echo "Error: ".$sql.mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
    
    ?>
  
   