<?php
   include "cabecera.php";
?>

<?php
   $numeroSecreto=77;
   $intento=random_int(1,100);

   echo "Su intento: $intento <br>";
   if($intento<$numeroSecreto){
    echo "El intento es más bajo que el nº secreto<br>";
   }elseif($intento>$numeroSecreto){
    echo "El intento es más alto que el nº secreto<br>";
   }else{
    echo "HAS ACERTADO !!!!";
   }
?>
    <a href="07if.php">RECARGAR</a>

<?php
   include "pie.php";
?>