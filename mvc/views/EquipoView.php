<?php
    include_once('../controllers/EquipoController.php');

    $equipo=new EquipoController();
    $context=$_POST['context'];

    function getEquipo() {
        if($GLOBALS['context']=='initSelects')
            echo $GLOBALS['equipo']->getEquipo();
    }
    getEquipo();
?>