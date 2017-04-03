<?php 

    /*
    include_once("Empleado.php");

    $empleado = new empleado("Juan", "garcia", 23456789, "Masculino");
    //$empleado->hablar();
    $empleado->hablar("español");

    $empleado->toString();
    */

    //include_once("Empleado.php");
    include_once("Fabrica.php");

    $empleado = new empleado("Juan", "garcia", 23456789, "Masculino");
    $fabrica = new fabrica();
    $fabrica->empleado = $empleado;




?>