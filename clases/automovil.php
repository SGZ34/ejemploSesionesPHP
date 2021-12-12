<?php
    class automovil extends vehiculo{
        protected $numeroPuertas;
        protected $tipo;
        
        function __set($name,$value){
            $this->$name = $value;
        }

        function __get($name){
            return $this->$name;
        }
    }

?>