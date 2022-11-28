<?php 
    include_once('./DataBase.php');
    $meses=$_POST['meses'];

    $query='call set_garantia('.$meses.')';
    function consultar() {
        echo $GLOBALS['query'];
    }
    consultar();
?>