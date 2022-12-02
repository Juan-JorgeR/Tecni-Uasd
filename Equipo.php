<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];
        $proveedor=$_POST['proveedor'];
        $marca=$_POST['marca'];
        $garantia=$_POST['garantia'];
        $informacion_tecnica=$_POST['informacion_tecnica'];
    
        $query='call set_equipo("'.$nombre.'","'.$precio.'","'.$proveedor.'","'.$marca.'","'.$garantia.'","'.$informacion_tecnica.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        echo "registro completado con exito";
    }
    consultar();
?>