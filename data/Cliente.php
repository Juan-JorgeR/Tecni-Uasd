<?php
    class Cliente {
        private $id;
        private $nombre;
        private $apellido;
        private $cedula;

        public function setId($id) {
            $this->id=$id;
        }
        public function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        public function setApellido($apellido) {
            $this->id=$id;
        }
        public function setCedula($cedula) {
            $this->nombre=$nombre;
        }
        public function getId() {
            return $this->id;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function getApellido() {
            return $this->apellido;
        }
        public function getCedula() {
            return $this->cedula;
        }
    }
?>