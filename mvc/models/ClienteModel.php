<?php
    include_once('../../data/Cliente.php');

    class ClienteModel {
        private $cliente;

        public function ClienteModel() {
            $this->cliente==new Cliente();
        }
        public function getCliente() {
            $array=array('honda','toyota','nissan');
            return json_encode($array);
        }
    }
   
?>