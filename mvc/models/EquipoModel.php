<?php
    include_once('../../data/Equipo.php');

    class EquipoModel {
        private $equipo;

        public function EquipoModel() {
            $this->equipo=new Equipo();
        }
        public function getEquipo() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
?>