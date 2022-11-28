<?php
    include_once('../controllers/VendedorController.php');

    $vendedor=new VendedorController();
    $context=$_POST['context'];

    function getVendedor() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['vendedor']->getVendedor();
    }
    getVendedor();
?>