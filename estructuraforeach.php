<?php
    $arregloColores=array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris",
    );
    //el foreach sirve para recorrer los arreglos asociativos
        foreach ($arregloColores as $key) {
            echo $key;
            echo "<br>";
        }

    /*la estructura foreach es una estructura 
    de control iterativa que usa llaves o asociaciones
    de datos con indice*/

    echo "<br>";
    echo "Arreglo normal";
    echo "<br>";
    $array=array(1,2,3,4,5,6);
        foreach ($array as $key) {
            echo $key;
            echo "<br>";
        }
?>