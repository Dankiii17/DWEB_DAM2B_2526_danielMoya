<?php
   include "cabecera.php";
?>

<?php
   $nombre="Carlos";
   $hora=date("H");
   if($hora>=20){
    echo "Buenas noches $nombre";
   }elseif($hora>=15){
    echo "Buenas tardes $nombre";
   }elseif($hora>=6){
    echo "Buenos dias $nombre";
   }else{
    echo "Vuelve a dormirte $nombre";
   }
?>

<?php
   include "pie.php";
?>