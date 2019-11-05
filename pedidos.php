<?php 

  require "./conexao.php";
  $id = $_GET['id'];

  $SelectImage ="SELECT * FROM cadfarmacia WHERE id = $id";
  $GetImage = mysqli_query($conexao, $SelectImage);
  $GetImageAssoc = mysqli_fetch_assoc($GetImage);  

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Farmácia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <script src="https://kit.fontawesome.com/6b35525bc0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">

<div class="site-navbar py-2">

      <div class="search-wrap">
        
        <div class="container">
          <a  class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="pesquisa.php" method="GET">
            <input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar Produto">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
              <div class="site-logo">
              <h2>Multifarma</h2>
                </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="cadastro_produto.html">Cadastrar Produtos</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Alterar Perfil</a></li>
                <li><a href="indexfarmacia.php">Estoque</a></li>

                  </ul>
              </ul>
            </nav>
          </div>
          <div class="icons">  
            
          <a href="login_farmacia.html"><i class="fas fa-clinic-medical"></i><?php   
            
            $_SESSION['fantasia'] = $GetImageAssoc['fantasia'];
            echo"Olá, " . $_SESSION['fantasia'];
        
            ?>  </a>
            <?php
            if(isset( $_SESSION['fantasia'])){
           
            echo '<a href="index.php"><i class="fas fa-times"></i>';
               unset($_SESSION['email']);
               unset($_SESSION['senha']);
               unset($_SESSION['fantasia']);
            }
            ?>
            
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-blocks-cover">
    <?php 
     echo '<img class="site-blocks-cover" src="data:image/png;base64,'. base64_encode($GetImageAssoc['foto']).'" />';
    ?>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Pedidos</h2>
          </div>
        </div>

        <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-9 border">
                <div class="form-group row">
                  <div class="col-md-4">
                  <h2>Cliente</h2>
                  <p class="text-black">Nome do cliente</p>
                  <br>
                  <p class="text-black">Endereço</p>
                  </div>
                  <div class="col-md-4">
                  <h2>Pedidos</h2>
                  <p class="text-black">Pedido 1</p>
                  <br>
                  <p class="text-black">pedido 2</p>
                  </div>
                  <div class="col-md-4">
                  <h2>Total</h2>
                  <p class="text-black">preço 1</p>
                  <br>
                  <p class="text-black">preço 2</p>
                  <hr>
                  <p> total</p>

                  </div>
                  </div>
                </div>
                
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
</body>