<?php

//realizar un ABM con listado. con esta informacion , se debe de llegar a entender como modificar (traer-mostrar-guardar)

$id = 101;
$conexion = mysqli_connect("localhost","root","","utn"); //el password se deja vacio porque es una prueba local (servidor,root,pass ,base) //http://php.net/manual/es/class.mysqli.php

$textoconsulta = "select * from proveedores where numero=" . $id;
var_dump($textoconsulta);


$consulta = mysqli_query($conexion, $textoconsulta  ) ;  //http://php.net/manual/es/mysqli.query.php
//$consulta = mysqli_query($conexion,"select * from proveedores " ) ;

var_dump($consulta);
echo "<br>";


$filas = mysqli_fetch_object($consulta);

var_dump($filas);


?>