<?php
    include_once('../../data/Marca.php');

    class MarcaModel {
        private $marca;

        public function MarcaModel() {
            $this->marca=new Marca();
        }
        public function getMarca() {
            $array=array('honda','toyota','nissan',$this->marca->getNombre());
            return json_encode($array);
        }
    }
?>