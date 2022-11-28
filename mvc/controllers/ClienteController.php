<?php
    include_once('../models/ClienteModel.php');

    class ClienteController() {
        private $cliente;

        public function ClienteController() {
            $this->cliente==new ClienteModel();
        }
        public function getCliente() {
            echo $this->cliente->getCliente();
        }
    }
?>