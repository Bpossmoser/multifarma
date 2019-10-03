<?php
    include("conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $data_cadastro = $_POST['datac'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];

    $imagetmp = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    //$imagetmp = $_FILES['foto']['tmp_name'];

        $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso, preco, foto) 
        VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso', '$preco','$imagetmp')";

        if(mysqli_query($conexao, $sql)){
            echo "Cadastro feito";
        }
        else {
            echo "Error: ".$sql.mysqli_error($conexao);
        }
    mysqli_close($conexao);
    
    ?>
  
   