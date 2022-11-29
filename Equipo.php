<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $proveedor=$_POST['cedula'];
        $marca=$_POST['marca'];
        $garantia=$_POST['garantia'];
    
        $query='call set_equipo("'.$nombre.'","'.$precio.'","'.$proveedor.'","'.$marca.'","'.$garantia.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>