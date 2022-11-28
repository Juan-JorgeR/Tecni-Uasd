<?php 
    include_once('./DataBase.php');
    $cedula=$_POST['cedula'];

    $query='call estatus_cuentas_por_cobrar_a_credito('.$cedula.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>