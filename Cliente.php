<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $cedula=$_POST['cedula'];

    $query='call set_cliente('.$nombre.','.$apellido.','.$cedula.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>