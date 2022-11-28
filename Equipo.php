<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $proveedor=$_POST['cedula'];
    $marca=$_POST['marca'];
    $garantia=$_POST['garantia'];

    $query='call set_equipo('.$nombre.','.$precio.','.$proveedor.','.$marca.','.$garantia.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>