<?php
    class Factura {
        private $id;
        private $cliente;
        private $monto;
        private $fecha;
        private $vendedor;
        private $tipoVenta;
        private $equipo;

        public function setId($id) {
            $this->id=$id;
        }
        public function setCliente($cliente) {
            $this->cliente=$cliente;
        }
        public function setMonto($monto) {
            $this->monto=$monto;
        }
        public function setFecha($fecha) {
            $this->fecha=$fecha;
        }
        public function setVendedor($vendedor) {
            $this->vendedor=$vendedor;
        }
        public function setTipoVenta($tipoVenta) {
            $this->tipoVenta=$tipoVenta;
        }
        public function setEquipo($equipo) {
            $this->equipo=$equipo;
        }
        public function getId() {
            return $this->id;
        }
        public function getCliente() {
            return $this->cliente;
        }
        public function getMonto() {
            return $this->monto;
        }
        public function getFecha() {
            return $this->fecha;
        }
        public function getVendedor() {
            return $this->vendedor;
        }
        public function getTipoVenta() {
            return $this->tipoVenta;
        }
        public function getEquipo() {
            return $this->equipo;
        }
    }
?>