<?php 
    class persona{
        public $documento;
        public $nombre;
        public $telefono;
        public $direccion;
        public $placaVehiculo;
        public $pago;
        public $fecha;

        public function __set($name,$value){
            $this->$name = $value;
        }

        public function __get($name){
            return $this->$name;
        }
    }
?>