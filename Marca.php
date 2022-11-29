<?php 
    include_once('./DataBase.php');

    function consultar() {
        $nombre=$_POST['nombre'];

        $query='call set_marca("'.$nombre.'")';
        $result = $GLOBALS['mysqli']->query($query);
    }
    consultar();
?>