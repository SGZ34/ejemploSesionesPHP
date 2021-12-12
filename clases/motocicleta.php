<?php
    class motocicleta extends vehiculo{
        protected $cilindraje;
        
        function __set($name,$value){
            $this->$name = $value;
        }

        function __get($name){
            return $this->$name;
        }
    }

?>