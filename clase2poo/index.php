<?php

    //require("funciones.php");
    require("funciones.php");
    require("calculadora.php");
    //include_once("NoExiste.php");
    //require_once("funciones.php");

    //$resultado=sumar(2,4);
    $resultado= calculadora::sumar(5,6);

    echo "<br>";
    echo $resultado . " Resultado ";

    

?>