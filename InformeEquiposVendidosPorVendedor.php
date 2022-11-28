<?php 
    include_once('./DataBase.php');
    $mes=$_POST['mes'];
    $cedula=$_POST['cedula'];

    $query='call existencia_de_garantia('.$mes.','.$cedula.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>