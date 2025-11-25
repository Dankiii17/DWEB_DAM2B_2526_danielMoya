<?php
    include "cabecera.php";
?>

<?php
    echo "<h3>Generando casillas de verificación</h3>\n";
    echo "<form action='#' method='get' >";
    echo "<div>";
    
    for($contador=1; $contador<=10; $contador++){
        echo "<input type=checkbox name=Casilla".$contador."  value=".$contador.">";
        echo "<label>Casilla $contador</label><br>";
    }

    echo "</div></form>"; 
?>

<?php
    include "pie.php";
?>