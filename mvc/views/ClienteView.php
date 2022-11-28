<?php
    include_once('../controllers/ClienteController.php');

    $cliente=new ClienteController();
    $context=$_POST['context'];

    function getCliente() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['cliente']->getCliente();
    }
    getCliente();
?>