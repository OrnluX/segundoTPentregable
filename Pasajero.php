<?php
    /**
        La empresa de transporte desea gestionar la información correspondiente a los pasajeros de los Viajes que pueden ser: Pasajeros estándares, Pasajeros VIP y Pasajeros con necesidades especiales. 

        La clase Pasajero tiene como atributos el nombre, el número de asiento y el número de ticket del pasaje del viaje. La clase "PasajeroVIP" tiene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero. La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden requerir servicios especiales como sillas de ruedas, asistencia para el embarque o desembarque, o comidas especiales para personas con alergias o restricciones alimentarias.  Implementar el método darPorcentajeIncremento() que retorne el porcentaje que debe aplicarse como incremento según las características del pasajero. Para un pasajero VIP se incrementa el importe un 35% y si la cantidad de millas acumuladas supera a las 300 millas se realiza un incremento del 30%. Si el pasajero tiene necesidades especiales y requiere silla de ruedas, asistencia y comida especial entonces el pasaje tiene un incremento del 30%; si solo requiere uno de los servicios prestados entonces el incremento es del 15%. Por último, para los pasajeros comunes el porcentaje de incremento es del 10 %.


        Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.


        Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario


     */

    class Pasajero {
        private $nombre;
        private $apellido;
        private $nroDocumento;
        private $nroTelefono;
        private $nroTicket;
        private $nroAsiento;

        //CONSTRUCTOR
        public function __construct(string $nombre, string $apellido, string $nroDocumento, string $nroTelefono, int $nroTicket, int $nroAsiento) 
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->nroDocumento = $nroDocumento;
            $this->nroTelefono = $nroTelefono;
            $this->nroTicket = $nroTicket;
            $this->nroAsiento = $nroAsiento;
        }

        //GETTERS
        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function getNroDocumento() {
            return $this->nroDocumento;
        }

        public function getNroTelefono() {
            return $this->nroTelefono;
        }

        public function getNroTicket() {
            return $this->nroTicket;
        }

        public function getNroAsiento() {
            return $this->nroAsiento;
        }

        //SETTERS
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function setNroDocumento($nroDocumento) {
            $this->nroDocumento = $nroDocumento;
        }

        public function setNroTelefono($nroTelefono) {
            $this->nroTelefono = $nroTelefono;
        }

        public function setNroTicket($nroTicket) {
            $this->nroTicket = $nroTicket;
        }

        public function setNroAsiento($nroAsiento) {
            $this->nroAsiento = $nroAsiento;
        }

        //MÉTODO TO STRING
        public function __toString()
        {
            return "Nombre: " . $this->getNombre() . 
            "\n Apellido: " . $this->getApellido() .
            "\n Nro Documento: " . $this->getNroDocumento() .
            "\n Nro Teléfono: " . $this->getNroTelefono() .
            "\n Ticket nro: " . $this->getNroTicket() .
            "\n Asiento Nro: " . $this->getNroAsiento(); 
        }
    }

?>