<?php
    include_once("figurageometrica.php");

    //con extends le estoy diciendo que la clase rectangulo hereda de figurageometrica.
    class rectangulo extends figurageometrica{

        private $_ladoUno=0;
        private $_ladoDos=0;

        //se define el constructor de la clase
        public function __construct($ladoUno,$ladoDos){
            
            $this->_ladoUno = $ladoUno;
            $this->_ladoDos = $ladoDos;
            calcularDatos();
            //calcular perimetro y superficie y registrarlos en los atributos del base.

        }

        private function calcularDatos(){
            parent::
        }

        public function dibujar(){

        }

        public function toString(){

        }

    }

?>