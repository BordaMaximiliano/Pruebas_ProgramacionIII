<?php 
    //Para obtener el resultado como string
    //echo "-" .  $_POST['valor'] . "-";

    //$_REQUEST 
    //var_dump($_REQUEST);
    var_dump($_POST);

    if( $_POST['guardar']){
        $retorno = $_POST['nombre'];
        $handle = fopen("PasajeDatos.txt","w") or die("Unable to open file!");
        fwrite($handle, $retorno);
        fclose($handle);        
    }
    if ($_POST['leer']){
        $handle = fopen("PasajeDatos.txt","r") or die("Unable to open file!");
        
        while(!feof($handle))
        {
            //si le coloca filesize voy a estar leyendo todo el archivo.
            $empleadoReg=fgets($handle);
            echo " contenido archivo " . $empleadoReg;                
        }

        fclose($handle);

    }

    


?>