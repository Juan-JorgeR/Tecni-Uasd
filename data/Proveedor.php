<?php
    class Proveedor {
        private $id;
        private $nombre;

        public function setId($id) {
            $this->id=$id;
        }
        public function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        public function getId() {
            return $this->id;
        }
        public function getNombre() {
            return $this->nombre;
        }
    }
?>