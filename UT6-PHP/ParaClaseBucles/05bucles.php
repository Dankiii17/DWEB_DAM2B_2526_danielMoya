<?php
   include "cabecera.php";
?>

<?php
    $dineroInicial=250; 
    $dinero=$dineroInicial;
    $libros=0;
    $precioLibro=16;
    while($dinero>=$precioLibro){
        $libros++;
        echo "$libros : " .$precioLibro*$libros."<br>";
        $dinero-=16;
    }
    echo "Por $dineroInicial € se pueden comprar $libros libros"
?>

<?php
   include "pie.php";
?>