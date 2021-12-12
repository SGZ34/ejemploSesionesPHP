<?php
    class vehiculo{
        protected $placa;
        protected $marca;
        protected $modelo;
        

        function __set($name,$value){
            $this->$name = $value;
        }

        function __get($name){
            return $this->$name;
        }
    }

?>