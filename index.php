<?php
    // Con contructor
    // COn [0] = random
    // Con Push() 
    $sumatoria=0;
    $promedio=0;
    //echo rand() . "\n"; 
    //$array =  array( rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10) );
    //$array[4];
    
    $array[0]= rand(1,10);
    $array[1]= rand(1,10);
    $array[2]= rand(1,10);
    $array[3]= rand(1,10);
    $array[4]= rand(1,10);

    //var_dump($array) . "<br>";

    for($i=0 ; $i< count($array); $i++ ){
        $sumatoria= $sumatoria + $array[$i];
        echo "Para la posicion " . $i . " el valor es " . $array[$i] . "<br>";
    }

    $promedio= $sumatoria / 5;

    if($promedio > 6){
        echo "El promedio " . $promedio . " es mayor a 6";
    } elseif ($promedio < 6) {
        echo "El promedio " . $promedio . " es menor a 6";
    } elseif ($promedio == 6) {
        echo "El promedio " . $promedio . " es igual a 6";
    }

?>