<?php
/*La estructura for, es una estructura de control iterativa
donde necesitas tener un inicio, un final y un contador*/
for($i=1;$i<11;$i++){
    /*Aqui se lleva a cabo la repeticion de algun proceso dado*/
                    echo $i;
                    echo "<br>";
                }
                echo "Tabla de multiplicar del 10";
                echo "<br>";
/*Creacion de la tabla de multiplicar con for*/
                for($i=1;$i<11;$i++){
                    echo "10 x".$i."=".$i*10;
                    echo "<br>";
                }
?>