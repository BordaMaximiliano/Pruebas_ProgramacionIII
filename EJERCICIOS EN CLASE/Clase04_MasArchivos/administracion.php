<?php

    $nombreArchivo="";
    $extension="";

    if ($_FILES['archivo']["error"] > 0)
    {
        echo "Error: " . $_FILES['archivo']['error'] . "<br>";
    }
    else
    {   
    
        echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
        echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
        echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
        echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];    

        //if( isset($_POST['nombreemple'])){
        if( $_POST['nombreemple'] != ""){
            //concateno el nombre con la extension original del archivo.s
            $nombreArchivo = $_POST['nombreemple'] . substr($_FILES['archivo']['name'], -4, 4);            
            echo "<br>Nombre foto: " . $nombreArchivo . "<br>";
        }else{
            $nombreArchivo = $_FILES['archivo']['name'] ;
        }

        echo "<br>Nombre foto: archivos/" . $nombreArchivo . "<br>";

        //se verifica si existe el archivo, de existir lo pasa a un directorio de backup.
        //agregandole al nombre del archivo la fecha completa para garantizar que no se repetira.
        if (file_exists("archivos/" . $nombreArchivo)){

            $nombrebackup= substr($nombreArchivo, 0, strlen($nombreArchivo)-4 )  . date("Y_m_d h_i_sa") . substr($nombreArchivo, -4, 4)  ;
            echo "<br>Nombre foto a backuppear: " . $nombrebackup . "<br>";
            //se debe de mover el archivo cambiandole el nombre agregandole la fecha del dia junto con la hora mm y ss
             move_uploaded_file( $_FILES['archivo']['tmp_name'] , 'bkparchivos/' . $nombrebackup);

        }else{
            move_uploaded_file( $_FILES['archivo']['tmp_name'] , 'archivos/' . $nombreArchivo);
        }

        
        
        //move_uploaded_file($_FILES['archivo']['tmp_name'],'archivos/' . $_FILES['archivo']['name']);
        //<em id="__mceDel"> </em>

    }


?>