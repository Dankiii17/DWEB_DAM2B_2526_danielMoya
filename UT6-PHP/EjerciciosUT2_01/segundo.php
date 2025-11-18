
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
               echo "<p>Instituto: ".nombreInsituto." </p>
               <p>Nombre: $nombre</p>
               <p>Edad: $edad</p>
               <p>Altura: $altura</p>
               <p>Módulo: $nombreModulo</p>
               <p>Horas: ".horasModulo."</p>
               <p>Algo pendiente de primero?" .(int)$pendiente."</p>"
            ?>
            
              
        </div>
         <div id="pie">Implantación de aplicaciones web</div>
        </div>
    </body>
</html>
