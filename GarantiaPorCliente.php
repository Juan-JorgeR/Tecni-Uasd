<?php 
    include_once('./DataBase.php');
    $cedula=$_POST['cedula'];

    $query='call garantia_por_cliente('.$cedula.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>