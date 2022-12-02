<?php 
    include_once('./DataBase.php');

    function consultar() {
        $cedula=$_POST['cedula'];
        $vendedor=$_POST['vendedor'];
        $equipo=$_POST['equipo'];;
        $tipoVenta=$_POST['tipoVenta'];
    
        $query='call set_factura("'.$cedula.'","'.$vendedor.'","'.$equipo.'","'.$tipoVenta.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        echo "registro completado con exito";
    }
    consultar();
?>