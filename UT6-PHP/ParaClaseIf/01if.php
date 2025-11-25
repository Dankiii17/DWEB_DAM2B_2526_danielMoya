<?php
   include "cabecera.php";
?>
<?php
   $notaAlumno=random_int(1,10);
   $nombreAlumno="Carlos";

   if($notaAlumno<5){
      echo "$nombreAlumno ha sacado un SUSPENSO";
   }elseif($notaAlumno<6){
      echo "$nombreAlumno ha sacado un SUFICIENTE";
   }elseif($notaAlumno<7){
      echo "$nombreAlumno ha sacado un BIEN";
   }elseif($notaAlumno<9){
      echo "$nombreAlumno ha sacado un NOTABLE";
   }else{
      echo "$nombreAlumno ha sacado un SOBRESALIENTE";
   }
?>
<?php
   include "pie.php";
?>