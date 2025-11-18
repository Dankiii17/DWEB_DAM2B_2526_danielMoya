<?php
    $nombre="Dani";
   $edad=20;
   $altura=1.78;
   $nombreModulo="Desarrollo web";
   $algoPendiente=false;
   $pendiente=boolval($algoPendiente);
   
   define("nombreInsituto","Mª Ana Sanz");
   define("horasModulo",5);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
<body>
    <div id="contenido">
        <div id="cabecera"><h2>Variables y tipos de datos - Constantes</h2></div>
        <div id="principal">
           
            <h3>Datos de un alumno</h3>
            <?php
               echo "<table><caption>Datos de un alumno</caption>
               <tr><td>Nombre</td><td>$nombre</td></tr>
               <tr><td>Edad</td><td> $edad</td></tr>
               <tr><td>Altura</td><td> $altura</td></tr>
               <tr><td>Módulo</td><td> $nombreModulo</td></tr>
               <tr><td>Algo pendiente de primero?</th><td>" .(int)$pendiente."</td></tr></table>"
            ?>
            
              
        </div>
         <div id="pie">Implantación de aplicaciones web</div>
        </div>
</body>
</html>