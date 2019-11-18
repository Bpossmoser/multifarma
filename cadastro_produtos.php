<?php
    session_start();
    include("conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $data_cadastro = $_POST['datac'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];
    $imagetmp= addslashes (file_get_contents($_FILES['foto']['tmp_name']));
    $farmacia = $_SESSION['idFarmacia'];
    //$foto= $_POST['foto'];

    $imagetmp = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    //$imagetmp = $_FILES['foto']['tmp_name'];

    $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso, preco, foto, farmacia) 
    VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso', '$preco', '$imagetmp', '$farmacia')";

        if(mysqli_query($conexao, $sql)){
            echo "Cadastro feito <br>";
            echo "<a href='cadastro_produto.html'>Voltar</a ";
        }
        else {
            echo "Error: ".$sql.mysqli_error($conexao);
        }
    mysqli_close($conexao);
    
    ?>
  
   