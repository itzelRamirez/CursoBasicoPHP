<?php
  //Funcion normal de php
  function mifuncion(){
      //moostrar nombre
      $r=array(1);
      return $r;
  }
  //Funciones escalares
  function mifuncion2($valorA,$valorB,$opcion){
      switch ($opcion) {
          case 'suma':
              return $valorA + $valorB;
              break;
          case 'resta':
            return $valorA - $valorB;
          break;
          case 'multiplicacion':
            return $valorA * $valorB;
          break;
          case 'division':
            return $valorA / $valorB;
          break;
          default:
              break;
      }
  }
    echo mifuncion2(5,10,'multiplicacion');  
?>