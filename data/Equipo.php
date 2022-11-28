<?php
    class Equipo {
        private $id;
        private $nombre;
        private $precio;
        private $cedula;
        private $marca;
        private $proveedor;
        private $garantia;

        public function setId($id) {
            $this->id=$id;
        }
        public function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        public function setPrecio($precio) {
            $this->precio=$precio;
        }
        public function setCedula($cedula) {
            $this->cedula=$cedula;
        }
        public function setMarca($marca) {
            $this->marca=$marca;
        }
        public function setProveedor($proveedor) {
            $this->proveedor=$proveedor;
        }
        public function setGarantia($garantia) {
            $this->garantia=$garantia;
        }
        public function getId() {
            return $this->id;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function getPrecio() {
            return $this->precio;
        }
        public function getCedula() {
            return $this->cedula;
        }
        public function getMarca() {
            return $this->marca;
        }
        public function getProveedor() {
            return $this->proveedor;
        }
        public function getGarantia() {
            return $this->garantia;
        }
    }
?>