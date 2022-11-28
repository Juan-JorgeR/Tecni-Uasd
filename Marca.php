<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];

    $query='call set_marca('.$nombre.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>