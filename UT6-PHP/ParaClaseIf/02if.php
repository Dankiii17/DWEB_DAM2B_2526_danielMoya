<?php
   include "cabecera.php";
?>

<?php
   $nombreIdioma="francés";

   if($nombreIdioma=="castellano"){
    echo "Bienvenido";
   }elseif($nombreIdioma=="inglés"){
    echo "Welcome";
   }elseif($nombreIdioma=="francés"){
    echo "Bienvenu";
   }else{
    echo "Idioma desconocido";
   }
?>

<?php
   include "pie.php";
?>