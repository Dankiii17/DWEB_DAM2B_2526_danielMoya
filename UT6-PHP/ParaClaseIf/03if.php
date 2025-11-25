<?php
   include "cabecera.php";
?>

<?php
   $dia=random_int(1,7);

   switch ($dia){
    case 1:
        echo "Día laborable";
        break;
    case 2:
        echo "Día laborable";
        break;
    case 3:
        echo "Día laborable";
        break;
    case 4:
        echo "Día laborable";
        break;
    case 5:
        echo "Día laborable";
        break;
    case 6:
        echo "Día no laborable";
        break;
    case 7:
        echo "Día no laborable";
        break;
    default:
        echo "NOP";
        break;

   }
?>

<?php
   include "pie.php";
?>