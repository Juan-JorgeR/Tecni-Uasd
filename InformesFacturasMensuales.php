<?php 
    include_once('./DataBase.php');

    function consultar() {
        $mes=$_POST['mes'];

        $query='call informe_facturas_mensuales("'.$mes.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>