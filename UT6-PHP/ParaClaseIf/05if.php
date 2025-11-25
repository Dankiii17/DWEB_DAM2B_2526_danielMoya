<?php
  include "cabecera.php";
?>

<?php
   $puntos=200;

   $bonificacion=true;
    echo "Puntos iniciales $puntos <br>";
   if($bonificacion){
    $puntos+=100;
    echo "Con bonificacion de 100 puntos <br>
    Puntos totales $puntos";
    }else{
        echo "Sin bonificacion <br>
        Puntos totales $puntos";
    }
   

?>

<?php
   include "pie.php";
?>