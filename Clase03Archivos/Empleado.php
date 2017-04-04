<?php
    include_once("Persona.php");

    class empleado extends persona{

        //Area de declaracion de propiedades o campos.
        protected $legajo;
        protected $sueldo;
      

        //Declaracion del constructor.
        public function __construct($nombre, $apellido, $dni, $sexo){
            //Se llama al constructor de la clase base 
            //para inicializar todas las variables.
            parent::__construct($nombre, $apellido, $dni, $sexo);
            echo "entro al constructor hijo<br>" . $apellido;
        }
       
        //Declaracion del destructor
        public function __destruct(){
            echo "entro al destructor hijo<br>";
        }

        //Declaracion de getters
        public function getLegajo(){
            return $this->legajo;
        }
        public function getSueldo(){
            return $this->sueldo;
        }
        

        //Declaracion de los metodos abstractos que tendra la clase.
        public function hablar($idiona){
            echo "El empleado habla " . $idiona . "<br>";
        }
        public  function toString(){
            return $this->getNombre() . "-" . $this->getApellido() . "-" . $this->getDni() . "-" .  $this->getSexo()  ;
            //return "El empleado " . $this->getNombre() . " " . $this->getApellido() . " con Dni " . $this->getDni() . " es de sexo " .  $this->getSexo() . "<br>";
        }


    }

?>
