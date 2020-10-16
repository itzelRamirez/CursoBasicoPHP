<?php
    /*Los operadores logicos sirven para validar expresiones
    tal es el caso del operador or que sirve para validar
    una sentencia u otra, en el caso del operador and que sirve 
    para validar ambas sentencias*/

    $resultado=50;

    echo "Operador AND";
    echo "<br>";

        if($resultado<51 and $resultado > 49){
            echo "Es un numero 50 valido";
            echo "<br>";
            }
    
    $edadvalida=25;

        if($edadvalida > 18 and $edadvalida < 26){
            echo "La edad es valida";
            echo "<br>";
                }
    echo "Operador OR";
    echo "<br>";
    $sexo="F";
        if($sexo=='M' or $sexo=='F'){
            echo "sexo valido";
            echo "<br>";
        }

    //El operador de diferente y la negacion
    /*El operador diferente, sirve para validar que un 
    dato no corresponda a la cantidad o caracter*/
    echo "Operador DIFERENTE";
    echo "<br>";     
        $dato=10;
            if($dato != 20){
                echo "Es un dato bueno";
                echo "<br>";
            }
    /*La negacion sirve para hacer una validacion de 
    algo que no ocurre*/        
    echo "Operador NEGACION";
    echo "<br>"; 
        $dato2=false;
        if(!$dato2){
            echo "No es verdadero";
        }    
?>