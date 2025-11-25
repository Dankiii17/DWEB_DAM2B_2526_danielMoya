<?php
    include "cabecera.php";
?>
<h3>Generando tabla de multiplicar hasta un nº</h3>
<table>
<?php
   $numero=5;
   echo "<h4>Tabla de multiplicar hasta el $numero</h4>";
   
   for($contador=1; $contador<=$numero; $contador++){
    // AQUI ESTA LA CORRECCION DE LAS COMILLAS
    if($contador%2==0){
        echo "<tr class='par'>"; 
    }else{
        echo "<tr class='impar'>";
    }
   
        for($producto=1; $producto<=10; $producto++){
            $multiplicacion=$producto*$contador;
            echo "<td>$multiplicacion</td>";
        }
    echo "</tr>";
   }
?>
</table>
<?php
   include "pie.php";
?>