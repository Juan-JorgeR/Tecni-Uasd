<?php
    include_once('../models/MarcaModel.php');

    class MarcaController {
        private $marca;

        public function MarcaController() {
            $this->marca=new MarcaModel();
        }
        public function getMarca() {
            echo $this->marca->getMarca();
        }
    } 
?>