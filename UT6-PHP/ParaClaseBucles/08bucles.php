<?php
    include "cabecera.php"
?>
<h3>Generando tabla de multiplicar de un nº</h3>
<table>
<?php
    $numero=4;
    echo "<h4>Tabla de multiplicar del $numero</h4>";
   for($contador=1; $contador<=10; $contador++){
    $multiplicacion=$numero * $contador;
    echo "<tr><td>$numero * $contador</td><td> $multiplicacion</td></tr>";
   }
?>
</table>
<?php
   include "pie.php"
?>