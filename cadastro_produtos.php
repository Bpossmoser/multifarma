<?php
    include("conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $data_cadastro = $_POST['datac'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $peso = $_POST['peso'];
    $preco = $_POST['preco'];
    //$foto= $_POST['foto'];

   // $handle = fopen( $foto, 'r' );
    //$conteudo = fread( $handle, filesize($foto));
    //fclose( $fd );
    //$codificado = base64_encode ($conteudos) ;
   

    $sql = "INSERT INTO cadastro_produtos (nome_produto, datac, descricao, tipo, peso, preco) 
    VALUES ('$nome_produto', '$data_cadastro',  '$descricao',  '$tipo','$peso', '$preco')";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro feito <br>";
        echo "<a href='cadastro_produto.html'> voltar</a>";
    }
    else {
        echo "Error: ".$sql.mysqli_error($conexao);
    }
    
    mysqli_close($conexao);
    
    ?>
  
   