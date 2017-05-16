<?php

    include_once("baseDatos.php");
    
    
//realizar un ABM con listado. con esta informacion , se debe de llegar a entender como modificar (traer-mostrar-guardar)
$id = 101;

//ESTILO POR PROCEDIMIENTO.
//mysqli_connect es una extension o alias del constructor mysqli::__construct()
//$conexion = mysqli_connect("localhost","root","","utn"); //el password se deja vacio porque es una prueba local (servidor,root,pass ,base) //http://php.net/manual/es/class.mysqli.php
//ESTILO POR OBJETO.

$conexion = new mysqli("localhost", "root", "", "utn");

  echo "<BR>*******************************";
  var_dump($conexion) ;
  echo "***********************************<BR>";

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
    echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
}


/*
$_objConexion = new basedatos("localhost", "root", "", "utn");
$_objConexion->conectarse();
*/

//$textoconsulta = "select * from proveedores where numero=" . $id;
$textoconsulta = "select * from proveedores " ;
//var_dump($textoconsulta);

//ESTILO POR PROCEDIMIENTO.
//$consulta = mysqli_query($conexion, $textoconsulta  ) ;  //http://php.net/manual/es/mysqli.query.php
//$consulta = mysqli_query($conexion,"select * from proveedores " ) ;

/**/
//ESTILO POR OBJETO.
if (($consulta = $conexion->query($textoconsulta))) {
    
    /* obtener un array asociativo */
    while ($fila = $consulta->fetch_assoc()) {
        //printf ("%s (%s)\n", $fila["nombre"], $fila["domicilio"] );
        echo "<br>" . $fila["nombre"] . "<br>";
        echo $fila["domicilio"] . "<br>";
        echo $fila["localidad"] . "<br>";
    }

    /* liberar el conjunto de resultados */
    $consulta->free();

}else{
    echo "Falló la obtención: (" . $conexion->errno . ") " . $conexion->error;
}
/**/


//var_dump($consulta);
echo "<br>";


//$filas = mysqli_fetch_object($consulta);

//var_dump($filas);


?>