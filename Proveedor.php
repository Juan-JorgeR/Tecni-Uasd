<?php 
    include_once('./DataBase.php');

    function consultar() {
        $nombre=$_POST['nombre'];

        $query='call set_proveedor("'.$nombre.'")';
        $result = $GLOBALS['mysqli']->query($query);
        
        echo "registro completado con exito";
    }
    consultar();
?>