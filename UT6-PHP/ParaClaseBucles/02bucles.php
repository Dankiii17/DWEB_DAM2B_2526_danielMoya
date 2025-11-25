<?php
   include "cabecera.php";
?>
<h3>Simulando notas en clase y contando aprobados</h3>
<?php
    $alumnos=20;
    $aporbados=0;
   for($contador=1; $contador<=$alumnos; $contador++){
    $nota=random_int(1,10);
    if($nota>=5){
        $aporbados++;
    }
   }
   echo "Total aprobados $aporbados";
?>
<?php
   include "pie.php";
?>