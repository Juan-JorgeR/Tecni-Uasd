<?php 
    include_once('./DataBase.php');
    $mes=$_POST['mes'];

    $query='call informe_ventas_al_contado('.$mes.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>