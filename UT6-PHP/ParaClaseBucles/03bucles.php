<?php
   include "cabecera.php";
?>
<h3>Tabla de una fila</h3>
<table>
<?php
   for($contador=1; $contador<=10; $contador++){
    echo "<tc><td>$contador</td></tc>";
   }
?>
</table>
<h3>Tabla de una columna</h3>
<table>
<?php
   for($contador=1; $contador<=10; $contador++){
    echo "<tr><td>$contador</td></tr>";
   }
?>
</table>

<?php
   include "pie.php";
?>