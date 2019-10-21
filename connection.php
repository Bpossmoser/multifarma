<?php 
 try {

//Dados do banco de dados
define("DB_HOST", "mysql05-farm76.kinghost.net");
define("DB_NAME", "multifarma");
define("DB_USER", "multifarma");
define("DB_PASS", "pharma123");

//Conexao com Banco de Dados
return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);


 } catch (\Throwable $th) {
    echo "Error: ".$th->getMessage() . "Tipo do erro: " . $th->getCode() ;
 }
