<?php
   include "cabecera.php";
?>
<h3>Lista de viñetas con for</h3>
<ul>
<?php
   for($contador=1; $contador<=10; $contador++){
      echo "<li> Iteración $contador</li>";
   }
   
?>
</ul>
<h3>Lista de viñetas con while</h3>
<ul>
<?php
   $contador=1;
   while($contador<=10){
      echo "<li> Iteración $contador</li>";
      $contador++;
   }
?>
</ul>
<?php
   include "pie.php";
?>