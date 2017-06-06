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
            $this->calcularDatos($ladoUno,$ladoDos);
            //calcular perimetro y superficie y registrarlos en los atributos del base.

        }

        protected function calcularDatos($ladoUno,$ladoDos){
            $this->_perimetro = 2*$ladoUno + 2*$ladoDos ;
            //$this->_perimetro = 38782789203 ;
            $this->_superficie = $ladoUno * $ladoDos ; //Base por altura.
            //echo "El perimetro del rectangulo es de: " . $this->_perimetro . "<br>";
            //echo "La superficie de un rectangulo es de :" . $this->_superficie;
        }

        public function dibujar(){
            $this->toString();
        }
        
        //este metodo es el encargado de imprimir por pantalla la funcion obtenida
        //como asi tambien de dibujar la figura .
        public function toString(){
            echo "El rectangulo de lado " . $this->_ladoUno . " y alto " . $this->_ladoDos . "<br>";
            echo "El perimetro del rectangulo es de: " . $this->_perimetro . "<br>";
            echo "La superficie de un rectangulo es de :" . $this->_superficie . "<br>"; 
            echo "Dibujando la figura del rectangulo <br>";

            //este for va a dibujar el alto .
            for($j=1;$j<=$this->_ladoDos;$j++ ){
                //este for va a dibujar el ancho del rectangulo.
                for($i=1;$i<=$this->_ladoUno;$i++ ){
                    echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> * </FONT>";      
                }
                echo "<br>";
            }
            /*
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> ***** </FONT><br>";
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> ***** </FONT><br>";
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> ***** </FONT><br>";
            */

        }

    }

?>