<?php
    include_once('../../data/Garantia.php');

    class GarantiaModel {
        private $garantia;

        public function GarantiaModel() {
            $this->garantia=new Garantia();
        }
        public function getGarantia() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
?>