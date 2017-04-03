<?php

    include_once("Empleado.php");

    class fabrica {

        private $empleados = array(); //new empleado; 
        private $emple;
        private $emple1;
        private $emple2;
        public $array = array();

        //Declaracion del constructor.
        public function __construct(){            
            echo "entro al constructor Fabrica<br>";
        }

        public function agregarEmpleado(){
            $this->emple = new empleado("Juan", "Garzonn", 23456789, "Masculino");                       
            array_push($this->empleados, $this->emple);

            
            $this->emple1 = new empleado("Juan", "Ibarra", 23456789, "femenino"); 
            array_push($this->empleados, $this->emple1);

            $this->emple2 = new empleado("Juan", "Garzonn", 23456789, "Masculino");                       
            array_push($this->empleados, $this->emple2);
            

            //$this->empleados = array_unique($this->empleados); 
            var_dump($this->empleados) . "<br>";

        }
      

    }

?>