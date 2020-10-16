<?php
    $var="Pedro Jimenez Lopez";
    $fecha="01-05-2017";

    /*Explode es una funcion que convierte un string 
    a un arreglo dependiendo de la construccion pedida
    */
   $datos=explode(" ",$var);
    echo "<pre>";
    print_r($datos);
    echo "</pre>";
    echo "<br>" 

   /* $datos1=explode(" ",$var);
    $f=explode("-",$fecha);
    echo "El mes de la fecha es:".$f[1]; */
?>