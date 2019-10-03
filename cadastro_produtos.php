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

<<<<<<< HEAD
    $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso, preco) 
    VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso', '$preco')";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro feito <br>";
        echo "<a href='cadastro_produto.html'> voltar</a>";
    }
    else {
        echo "Error: ".$sql.mysqli_error($conexao);
    }
    
=======
        $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso, preco, foto) 
        VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso', '$preco', '$imagetmp')";

        if(mysqli_query($conexao, $sql)){
            echo "Cadastro feito";
        }
        else {
            echo "Error: ".$sql.mysqli_error($conexao);
        }
>>>>>>> d565c3c01fefda6b87d5c5ae43d236315159aa9d
    mysqli_close($conexao);
    
    ?>
  
   