<?php   //Configuração e conexão com o banco de dados
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("BASE","contatos");

    $conn= new MySQLi(HOST,USER,PASS,BASE);
?>