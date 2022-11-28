<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];

    $query='call existencia_de_garantia('.$nombre.','.$marca.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>