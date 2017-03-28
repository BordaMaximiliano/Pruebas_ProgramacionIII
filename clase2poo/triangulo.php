<?php
    include_once("figurageometrica.php");

    //con extends le estoy diciendo que la clase triangulo hereda de figurageometrica.
    class triangulo extends figurageometrica{

        private $_altura=0;
        private $_base=0;

        //se define el constructor de la clase
        public function __construct($altura,$base){
            
            //calcular perimetro y superficie y registrarlos en los atributos del base.
            
        }

        private function calcularDatos(){

        }

        public function dibujar(){

        }

        public function toString(){

        }

    }


?>