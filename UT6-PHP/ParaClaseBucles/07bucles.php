<?php
   include "cabecera.php";
?>

<?php
    echo "<h3>Generando botones</h3>\n";
 echo "<form id='form' action='#' method='get' >";
 echo "<div>";
    for($contador=1;$contador<=10;$contador++){
        echo "<label>Boton $contador</label> <input type= button value=Editar> <input type=button value=Borrar><br>";
    }


 echo "</div></form>";
?>

<?php
   include "pie.php";
?>

