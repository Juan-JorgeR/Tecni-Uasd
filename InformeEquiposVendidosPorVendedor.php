<?php 
    include_once('./DataBase.php');

    function consultar() {
        $mes=$_POST['mes'];
        $cedula=$_POST['cedula'];
    
        $query='call informe_equipos_vendidos_por_vendedor("'.$mes.'","'.$cedula.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>