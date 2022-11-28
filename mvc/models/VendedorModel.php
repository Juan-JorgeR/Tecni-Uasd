<?php
    include_once('../../data/Vendedor.php');

    class VendedorModel {
        private $vendedor;

        public function VendedorModel() {
            $this->vendedor=new Vendedor();
        }
        public function getVendedor() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
?>