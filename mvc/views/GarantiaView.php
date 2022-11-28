<?php
    include_once('../controllers/GarantiaController.php');

    $garantia=new GarantiaController();
    $context=$_POST['context'];

    function getGarantia() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['garantia']->getGarantia();
    }
    getGarantia();
?>