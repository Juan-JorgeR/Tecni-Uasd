<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $cedula=$_POST['cedula'];

        $query='call estatus_cuentas_por_cobrar_a_credito("'.$cedula.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>