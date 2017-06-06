<?php

    //require("funciones.php");
    require("funciones.php");
    require("calculadora.php");
    //include_once("NoExiste.php");
    //require_once("funciones.php");

    //$resultado=sumar(2,4);
    //si el metodo fuera estatico se llamaria asi.
    //Si la clase fuera abstracta el el metodo statico se prioriza el metodo y te deja llamar al metodo.
    //$resultado= calculadora::sumar(5,6);

    $obj = new calculadora();
    $resultado = $obj->sumar(6,9);

    echo "<br>";
    echo $resultado . " Resultado ";

    

?>