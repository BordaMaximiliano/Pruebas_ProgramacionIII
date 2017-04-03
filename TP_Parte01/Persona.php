<?php 

    //Se declara la clase abstracta para que no pueda ser instanciada.
    abstract class persona{
        //Area de declaracion de propiedades o campos.
        private $nombre="";
        private $apellido="";
        private $dni=0;
        private $sexo="";

        //Declaracion del constructor.
        public function __construct($nombre, $apellido, $dni, $sexo){

            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->dni=$dni;
            $this->sexo=$sexo;

        }

        //Declaracion del destructor
        public function __destruct(){
            echo "entro al destructor<br>";
        }

        //Declaracion de getters
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function getDni(){
            return $this->dni;
        }
        public function getSexo(){
            return $this->sexo;
        }

        //Declaracion de los metodos abstractos que tendra la clase.
        public abstract function hablar($idiona);

        public  function toString(){
            echo "La persona " . $this->nombre . " " . $this->apellido . " con Dni " . $this->dni . " es de sexo " .  $this->sexo . "<br>";
        }
    }


?>