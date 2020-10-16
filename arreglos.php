<?php
    $arreglo=array();
    $arreglo[0]="juan";
    $arreglo[1]=10;
    $arreglo[2]='autodidacta';
    $arreglo[3]='facultad';
//Poodemos llenar el arreglo desde el inicio o por posicion
   // $arreglo2=array('jose',5,6,7,8,9,10);
    for($i=0;$i<count($arreglo);$i++){
            echo $arreglo[$i];
            echo "<br>";

            if($arreglo[$i]=='autodidacta'){
                echo "Felicidades encontraste el dato";
                echo "<br>";
            }
        }
?>