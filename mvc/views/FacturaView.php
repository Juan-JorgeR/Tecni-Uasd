<?php
    include_once('../controllers/FacturaController.php');

    $factura=new FacturaController();
    $context=$_POST['context'];

    function getFactura() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['factura']->getFactura();
    }
    getFactura();
?>