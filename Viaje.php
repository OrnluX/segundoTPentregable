<?php
    /**
    *Describe la clase viaje. Cada instancia sera un viaje, el cual tendrá un Responsable de viaje, una lista de Pasajeros y un identificador único.
    */
    class Viaje {
        private $nroViaje;
        private $origen;
        private $destino;
        private $capacidadMaxima;
        private $objResponsableV;
        private $arrayPasajeros;

        //CONSTRUCTOR
        public function __construct(int $nroViaje, string $origen, string $destino, int $capacidadMaxima, object $objResponsableV, array $arrayPasajeros)
        {
            $this->nroViaje = $nroViaje;
            $this->origen = $origen;
            $this->destino = $destino;
            $this->capacidadMaxima = $capacidadMaxima;
            $this->objResponsableV = $objResponsableV;
            $this->arrayPasajeros = [];
        }

        //GETTERS
        public function getNroViaje() {
            return $this->nroViaje;
        }

        public function getOrigenViaje() {
            return $this->origen;
        }

        public function getDestinoViaje() {
            return $this->destino;
        }

        public function getCapacidadMax() {
            return $this->capacidadMaxima;
        }

        public function getResponsableV() {
            return $this->objResponsableV;
        }

        public function getArrayPasajeros() {
            return $this->arrayPasajeros;
        }

        //SETTERS
        public function setNroViaje($nroViaje) {
            $this->nroViaje = $nroViaje;
        }

        public function setOrigenViaje($origen) {
            $this->origen = $origen;
        }

        public function setDestinoviaje($destino) {
            $this->destino = $destino;
        }

        public function setCapacidadMax($capacidadMaxima) {
            $this->capacidadMaxima = $capacidadMaxima;
        }

        public function setResponsableV($objResponsableV) {
            $this->objResponsableV = $objResponsableV;
        }

        public function setArrayPasajeros($arrayPasajeros) {
            $this->arrayPasajeros = $arrayPasajeros;
        }

        public function __toString()
        {
            return $this->getNroViaje() . " " . $this->getResponsableV() . " " . $this->getOrigenViaje() . " " . $this->getDestinoViaje() . " " . $this->getCapacidadMax() . " " . $this->getResponsableV() . " " . $this->getArrayPasajeros();
        }
    }
?>