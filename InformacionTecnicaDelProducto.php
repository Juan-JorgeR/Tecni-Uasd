<?php 
    include_once('./DataBase.php');
    
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call informacion_tecnica_del_producto("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>