<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $cedula=$_POST['cedula'];
        
        $query='call set_cliente("'.$nombre.'","'.$apellido.'","'.$cedula.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>