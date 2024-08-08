<?php
    include_once 'Pasajeros.php';
    class PasajeroVIP extends Pasajeros {
        private $nroViajeroFrecuente;
        private $cantMillas;

        public function __construct(string $nombre, int $nroTicket, int $nroAsiento, int $nroViajeroFrecuente, float $cantMillas)
        {
            parent::__construct($nombre, $nroTicket, $nroAsiento);
            $this->nroViajeroFrecuente = $nroViajeroFrecuente;
            $this->cantMillas = $cantMillas;
        }

        //GETTERS
        public function getNroViajeroFrecuente() {
            return $this->nroViajeroFrecuente;
        }

        public function getCantMillas() {
            return $this->cantMillas;
        }

        //SETTERS
        public function setNroViajeroFrecuente($nroViajeroFrecuente) {
            $this->nroViajeroFrecuente = $nroViajeroFrecuente;
        }

        public function setCantMillas($cantMillas) {
            $this->cantMillas = $cantMillas;
        }

        public function __toString()
        {
            $cadena = parent:: __toString();
            $cadena . "\n Número de viajero frecuente: " . $this->getNroViajeroFrecuente() . "\n Cantidad de millas: " . $this->getCantMillas(); 
            return $cadena;
        }
    }
?>