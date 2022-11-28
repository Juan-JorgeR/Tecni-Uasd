<?php
    include_once('../controllers/MarcaController.php');

    $marca=new MarcaController();
    $context=$_POST['context'];

    function getMarca() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['marca']->getMarca();
    }
    getMarca();
?>