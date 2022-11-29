<?php 
    include_once('./DataBase.php');
   
    function consultar() {
        $nombre=$_POST['nombre'];
        $marca=$_POST['marca'];
    
        $query='call existencia_de_garantia("'.$nombre.'","'.$marca.'")';
        $result = $GLOBALS['mysqli']->query($query); 
    }
    consultar();
?>