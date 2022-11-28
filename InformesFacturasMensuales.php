<?php 
    include_once('./DataBase.php');
    $mes=$_POST['mes'];

    $query='call informe_facturas_mensuales('.$mes.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>