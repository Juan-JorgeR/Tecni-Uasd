<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call descripcion_de_los_equipos("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>