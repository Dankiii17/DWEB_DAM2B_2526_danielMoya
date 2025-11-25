<?php
   include "cabecera.php";
?>
<h3>Generando enlaces</h3>
<?php
   for($contador=1; $contador<=10; $contador++){
    echo "<p><a href=`#`>Enlace $contador</a></p>";
   }
?>

<?php
   include "pie.php";
?>