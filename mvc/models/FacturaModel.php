<?php
    include_once('../../data/Factura.php');

    class FacturaModel {
        private $factura;

        public function FacturaModel() {
            $this->factura=new Factura();
        }
        public function getFactura() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
?>