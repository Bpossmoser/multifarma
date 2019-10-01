<?php session_start(); ?>
<html>
    <head>
    </head>
    <body>

    <?php
    if (isset($_SESSION['logado'])== true){

        echo "BEM-VINDO ",$_SESSION['logado'];"<br><br>";
        echo '<br><br><a href="paginasair.php">(SAIR)</a>';
    }
    else {
        ?>
        <form action="index2.php" method="POST">
            --CADASTRO--<br>
            DIGITE SEU NOME:<br>
            <input type="text" name="email"><br>
            DIGITE SUA SENHA:<br>
            <input type="password" name="senha"><br>
            <input type="submit">
    </form>

    <form action="loginc.php" method="POST">
        --LOGIN--<br>
        DIGITE SEU NOME:<br>
        <input type="text" name="email"><br>
        <input type="password" name="senha"><br>
        <input type="submit">
    </form>
    <?php
    }
    ?>  
    </body>
    </html>
    
    
