<?php
    include_once('../models/VendedorModel.php');

    class VendedorController {
        private $vendedor;

        public function VendedorController() {
            $this->vendedor=new VendedorModel();
        }
        public function getVendedor() {
            echo $this->vendedor->getVendedor();
        }
    }
?>