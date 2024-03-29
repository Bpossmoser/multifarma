<?php 
  session_start();
  require "./conexao.php";

    $id = $_SESSION['idFarmacia'];

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
                <li><a href="pedidos.php">Pedidos</a></li>
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
  <div id="ImagemFarmacia">
    <?php 
     echo '<img src="data:image/png;base64,'. base64_encode($GetImageAssoc['foto']).'" /width="100%" height="100%">';
    ?>
  </div> 

    <!-- // require_once "./functions/product.php";
    // $pdoConexao = require_once "./connection.php";        
    // $Produtos  = getProducts($pdoConexao);
    
    // foreach($Produtos as $Produto):
    // echo '<div class="site-blocks-cover" style="background-image: url("data:image/png;base64,'. base64_encode($Produto['foto']).'");"></div>';

    // endforeach; -->
   
    <div class="site-section">
   

      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Estoque</h2>
          </div>
        </div>
<div class="row">
        <?php 
 
 require_once "./functions/product.php";
 $pdoConexao = require_once "./connection.php";
 $Produto = getProductsOfPharma($pdoConexao, $_SESSION['idFarmacia']);
 foreach($Produto as $Prod){


echo "<div class='col-sm-6 col-lg-4 text-center item mb-4'>";
               echo "<a href='produto.php?id=".$Prod['id']."'>";
               echo '<img src="data:image/png;base64,'. base64_encode($Prod['foto']).'" width = 250 heigth = 250 />';
               echo "<h3 class='text-dark'><a href='#'>" . $Prod['nome_produto'] . "</a></h3>";
               echo "<p class='price'>R$ " . $Prod['preco'] . "</p>";
               echo "</div>";
           
  
           
          }
            ?>
</div>
    <hr>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

          <div class="block-7">
              <h3 class="footer-heading mb-4">Sobre Nós</h3>
              <p>A multifarma é uma empresa voltada para as compras virtuais de produtos farmacêuticos, oferecendo uma plataforma com os produtos e preços disponibilizados por cada farmácia, podendo fazer pedidos e receber o produto na residência.
            Os pedidos podem ser efetuados  através de diversas plataformas, como em celulares, tablets, notebooks entre outros.</p>
            </div>

          </div>

          <div class="col-md-12 col-lg-6 ">
         </div>
         

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contate-nos</h3>
              <ul class="list-unstyled">
              <li class="address">Km 228, Lote 2A, BR-364 - Zona Rural, Cacoal-RO, 76960-970</li>
                <li class="phone"><a href="tel://23923929210">+55 (69) 3443-2445</a></li>
                <li class="email">multifarma7@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados Multifarma.
                          </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>