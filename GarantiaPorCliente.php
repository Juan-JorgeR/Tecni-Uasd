<?php 
    include_once('./DataBase.php');

    function consultar() {
        $cedula=$_POST['cedula'];

        $query='call garantia_por_cliente("'.$cedula.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>