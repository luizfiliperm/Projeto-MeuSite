<?php

    include_once("static/topo.php");
    include_once("static/menu.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $conteudo = "principal.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }
    include_once("static/rodape.php");
?>
