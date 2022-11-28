<?php
    include_once('../controllers/ProveedorController.php');

    $proveedor=new ProveedorController();
    $context=$_POST['context'];

    function getProveedor() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['proveedor']->getProveedor();
    }
    getProveedor();
?>