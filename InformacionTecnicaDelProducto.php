<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];

    $query='call informacion_tecnica_del_producto('.$nombre.','.$marca.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>