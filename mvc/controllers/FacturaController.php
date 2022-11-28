<?php
    include_once('../models/FacturaModel.php');

    class FacturaController() {
        private $factura;

        public function FacturaController() {
            $this->factura=new facturaModel();
        }
        public function getFactura() {
            echo $this->factura->getFactura();
        }
    }
?>