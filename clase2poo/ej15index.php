<?php

    include("triangulo.php");
    include("rectangulo.php");

    $resultadoRect=0;
    $rectangulo = new rectangulo(3,4);
    $rectangulo->setColor("green");
    $rectangulo->dibujar();

    //calcularDatos($altura,$base)
    $triangulo = new triangulo(10,8);
    $triangulo->setColor("red");
    $triangulo->dibujar();

    


?>