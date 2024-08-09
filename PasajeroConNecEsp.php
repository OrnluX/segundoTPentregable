<?php
    include_once 'Pasajero.php';
    class PasajeroConNecEsp extends Pasajero {
        private $reqSillaDeruedas;
        private $reqAsistencia;
        private $reqComidasEspeciales;

        //CONSTRUCTOR
        public function __construct(string $nombre, string $apellido, int $nroDocumento, int $nroTelefono, int $nroTicket, int $nroAsiento, bool $reqSillaDeruedas, bool $reqAsistencia, bool $reqComidasEspeciales)
        {   
            parent::__construct($nombre, $apellido, $nroDocumento, $nroTelefono, $nroTicket, $nroAsiento);
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