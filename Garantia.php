<?php 
    include_once('./DataBase.php');
    
    function consultar() {
        $meses=$_POST['meses'];

        $query='call set_garantia("'.$meses.'")';
        $result = $GLOBALS['mysqli']->query($query); 

        echo "registro completado con exito";
    }
    consultar();
?>