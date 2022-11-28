<?php
    include_once('../models/ProveedorModel.php');

    class ProveedorController {
        private $proveedor;

        public function ProveedorController() {
            $this->proveedor=new ProveedorModel();
        }
        public function getProveedor() {
            echo $this->proveedor->getProveedor();
        }
    }
?>