<?php
    include_once'Pasajeros.php';
    class PasajeroConNecEsp extends Pasajeros {
        private $reqSillaDeruedas;
        private $reqAsistencia;
        private $reqComidasEspeciales;

        public function __construct(string $nombre, int $nroTicket, int $nroAsiento, bool $reqSillaDeruedas, bool $reqAsistencia, bool $reqComidasEspeciales)
        {   
            parent::__construct($nombre, $nroTicket, $nroAsiento);
            $this->reqSillaDeruedas = $reqSillaDeruedas;
            $this->reqAsistencia = $reqAsistencia;
            $this->reqComidasEspeciales = $reqComidasEspeciales;
        }

        //GETTERS
        public function getReqSillaDeRuedas() {
            return $this->reqSillaDeruedas;
        }

        public function getReqAsistencia() {
            return $this->reqAsistencia;
        }

        public function getReqComidasEspeciales() {
            return $this->reqComidasEspeciales;
        }

        //SETTERS
        public function setReqSillaDeRuedas($reqSillaDeruedas) {
            $this->reqSillaDeruedas = $reqSillaDeruedas;
        }

        public function setReqAsistencia($reqAsistencia) {
            $this->reqAsistencia = $reqAsistencia;
        }

        public function setReqComidasEspeciales($reqComidasEspeciales) {
            $this->reqComidasEspeciales = $reqComidasEspeciales;
        }

        public function __toString()
        {
            $cadena = parent:: __toString();
            $cadena . "\n Requiere silla de ruedas: " . $this->getReqSillaDeRuedas() . "\n Requiere Asistencia: " . $this->getReqAsistencia() . "\n Requiere comidas especiales: " . $this->getReqComidasEspeciales();
            return $cadena;
        }

    }
?>