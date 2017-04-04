<?php

    include_once("Empleado.php");

    class fabrica {

        private $empleados = array() ; //new empleado; 
        //public $array = array();

        //Declaracion del constructor.
        public function __construct(){   
            //$this->$empleados = array();         
            echo "entro al constructor Fabrica<br>";
        }

        public function agregarEmpleado($objpersona){
            $this->empleados[] = $objpersona;                      
            //array_push($this->empleados, $this->emple);     
            //$this->empleados = array_unique($this->empleados); 
            var_dump($this->empleados) . "<br>";
        }

        private function EliminarEmpleadosRepetidos($objpersona){
            $this->empleados[] = array_unique($this->empleados);
        }


    }

?>