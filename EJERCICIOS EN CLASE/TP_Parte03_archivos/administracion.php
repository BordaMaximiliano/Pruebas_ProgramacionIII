<?php

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

    if( $_POST['nombreemple']){
        echo "<br>Nombre emple: " . $_POST['nombreemple'] . "<br>";
    }

    move_uploaded_file($_FILES['archivo']['tmp_name'],'subidas/' . $_FILES['archivo']['name']);
    //<em id="__mceDel"> </em>

    }

?>