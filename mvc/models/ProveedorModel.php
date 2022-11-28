<?php
    include_once('../../data/Proveedor.php');

    class ProveedorModel {
        private $proveedor;

        public function ProveedorModel() {
            $this->proveedor=new Proveedor();
        }
        public function getProveedor() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
?>