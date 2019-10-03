<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Multifarma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
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

  <?php 
  require('nav.php');
  ?>
  

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Início</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Loja</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrar por Preço</h3>
            <div id="slider-range" class="border-primary"></div>
            <input type="text" name="filtro" id="amount" class="form-control border-0 pl-0 bg-white">
          </div>
          <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrar po Referência</h3>
            <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
              <a class="dropdown-item" href="#">Relevância</a>
              <a class="dropdown-item" href="#">Nome, A to Z</a>
              <a class="dropdown-item" href="#">Nome, Z to A</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Preço, baixo para alto</a>
              <a class="dropdown-item" href="#">Preço, maior para menor</a>
            </div>
          </div>
        </div>
        

        <div class="row">

        <?php

        include("conexao.php");

        $resultado = mysqli_query($conexao, "SELECT * FROM cadastro_produtos");
        if (mysqli_num_rows($resultado) > 0) {
          while ($row_prof = mysqli_fetch_assoc($resultado)) {

            echo "<div class='col-sm-6 col-lg-4 text-center item mb-4'>";
            echo "<a href='produto.php?id=" . $row_prof['id'] . "'> <img src='images/product_03.png' alt='Image'></a>";
            echo "<h3 class='text-dark'><a href='#'>" . $row_prof['nome_produto'] . "</a></h3>";
            echo "<p class='price'>R$ " . $row_prof['preco'] . "</p>";
            echo "</div>";
          }
        }
        ?>
        </div>

        <!-- <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="produto.php"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="produto.php">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; $55.00</p>
          </div>
        </div> -->


        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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