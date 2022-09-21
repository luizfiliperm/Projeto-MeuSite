<?php

    include_once("topo.php");
    include_once("menu.php");

    if(empty($_SERVER["Query_STRING"])){
        $conteudo = "../principal.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET("$pg.php");
        include_once("$pg.php");
    }
    include_once("rodape.php");
?>
