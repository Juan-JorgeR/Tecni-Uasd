<?php
    class Garantia {
        private $id;
        private $meses;

        public function setId($id) {
            $this->id=$id;
        }
        public function setMeses($meses) {
            $this->meses=$meses;
        }
        public function getId() {
            return $this->id;
        }
        public function getMeses() {
            return $this->meses;
        }
    }
?>