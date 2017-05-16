<?php
    include_once("figurageometrica.php");

    //con extends le estoy diciendo que la clase triangulo hereda de figurageometrica.
    class triangulo extends figurageometrica{

        private $_altura=0;
        private $_base=0;

        //se define el constructor de la clase
        public function __construct($altura,$base){
            
            //calcular perimetro y superficie y registrarlos en los atributos del base.
            //Se asignan las propiedades privadas de la clase hija
            $this->_altura = $altura;
            $this->_base = $base;
            $this->calcularDatos($altura,$base);
            //calcular perimetro y superficie y registrarlos en los atributos del base.

        }

        protected function calcularDatos($altura,$base){
            $lado=0;
            //la funcion sqrt se utiliza para sacar la raiz cuadrada.
            $lado= sqrt(($base/2)*($base/2)) + ($altura*$altura) ;
            $this->_perimetro = 3 * $lado; //$base + (2 * $lado)  ;

            
            $this->_superficie = (sqrt(3)/4 ) * pow($lado,2);//($altura * $base) / 2 ; //Base por altura sobre 2.
            //echo "El perimetro del rectangulo es de: " . $this->_perimetro . "<br>";
            //echo "La superficie de un rectangulo es de :" . $this->_superficie;
        }

        public function dibujar(){
            $this->toString();
        }
        
        //este metodo es el encargado de imprimir por pantalla la funcion obtenida
        //como asi tambien de dibujar la figura .
        public function toString(){
            echo "El perimetro del triangulo es de: " . $this->_perimetro . "<br>";
            echo "La superficie de un triangulo es de :" . $this->_superficie . "<br>"; 
            echo "Dibujando la figura del rectangulo <br>";

            //este for va a dibujar el alto .
            /*
            for($j=1;$j<=$this->_ladoDos;$j++ ){
                //este for va a dibujar el ancho del rectangulo.
                for($i=1;$i<=$this->_ladoUno;$i++ ){
                    echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> * </FONT>";      
                }
                echo "<br>";
            }
            */
            
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . ">   *  </FONT><br>";
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . ">  *** </FONT><br>";
            echo "<FONT SIZE=5 COLOR=" . $this->getColor() . "> ***** </FONT><br>";
            

        }

    }


?>