<?php
   include "cabecera.php";
?>

<?php
   $pais="Alemania";

   switch($pais){
    case "Holanda":
        echo "Captial Amsterdam";
        break;
    case "Alemania":
        echo "Captial Berlín";
        break;
    case "Francia":
        echo "Captial Paris";
        break;
    case "Bélgica":
        echo "Captial Bruselas";
        break;
    default:
        echo "";
        break;


   }
?>

<?php
   include "pie.php";
?>