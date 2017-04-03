<?php

    //esta es la clase base.
    abstract class  figurageometrica{
        // esta propiedad es privada, accesible en la clase y sus subclases
        protected $_perimetro=0 ;
        protected $_superficie=0;
        protected $_color = "";

        //Se define el getter que devolvera el color de la figura.
        public function getColor() {
            return $this->_color;
        }
        
        //Se define el setter que asignara el color de la figura.
        public function setColor($color) {
            $this->_color=$color;
        }

        //se define el constructor de la clase
        public function __construct(){
        

        }

        //Se define metodo abstracto para que luego sea implementado por las clases hijas.
        public abstract function dibujar();
        //Se define metodo abstracto para que luego sea implementado por las clases hijas.    
        protected abstract function calcularDatos($ladoUno,$ladoDos);
        
        protected abstract function toString();
    }
?>