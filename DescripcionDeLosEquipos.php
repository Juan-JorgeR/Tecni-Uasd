<?php 
    include_once('./DataBase.php');
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];

    $query='call descripcion_de_los_equipos('.$nombre.','.$marca.')';
    function consultar() {
        $result = $GLOBALS['mysqli']->query($GLOBALS['query']); 
        echo $GLOBALS['query'];
    }
    consultar();
?>