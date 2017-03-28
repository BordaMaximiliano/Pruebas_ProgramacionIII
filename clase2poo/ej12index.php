<?php
$palabra = array("H","o","l","a");

echo invertir($palabra);


function invertir($array){
    $resultado="";
    $len=sizeof($array);

    for($i=$len; $i>=0 ; $i-- ){

        $resultado = $resultado . $array[$i];

    }
    return $resultado . "  palabra al vesre" . $len;
}

?>