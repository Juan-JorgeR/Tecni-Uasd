<?php
    include_once('../models/EquipoModel.php');

    class EquipoController {
        private $equipo;

        public function EquipoController() {
            $this->equipo=new EquipoModel();
        }
        public function getEquipo() {
            echo $this->equipo->getEquipo();
        }
    }
?>