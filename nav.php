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
              
                </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Lojas</a></li>
                <li><a href="shop.php">Produtos</a></li>
                <li><a href="login_farmacia.html">Login Farmácia</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            
          <a  href="login_usuario.html" ><i class="fas fa-user"></i><?php   
          session_start();
          if(isset( $_SESSION['nome'])){
            echo"Olá, " . $_SESSION['nome'];
          }
        
            ?>  </a>
            <?php
            if(isset( $_SESSION['nome'])){
           
            echo '<a href="index.php"><i class="fas fa-times"></i>';
               unset($_SESSION['email']);
               unset($_SESSION['senha']);
               unset($_SESSION['nome']);
            }
            ?>
            <a  class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="carrinho.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>