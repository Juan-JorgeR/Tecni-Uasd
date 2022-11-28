<?php
    include_once('../models/GarantiaModel.php');

    class GarantiaController {
        private $garantia;

        public function GarantiaController() {
            $this->garantia=new garantiaModel();
        }
        public function getGarantia() {
            echo $this->garantia->getGarantia();
        }
    }
?>