<?php 
    include_once('./DataBase.php');

    function consultar() {
        $mes=$_POST['mes'];

        $query='call informe_ventas_a_credito("'.$mes.'")';
        $result = $GLOBALS['mysqli']->query($query);
    }
    consultar();
?>