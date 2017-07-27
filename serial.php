<?php

//La siguiente linea configura el modo de conexion a el com3 y 9600 baudios
exec("mode COM3 BAUD=9600 PARITY=N data=8 stop=1 xon=off");
 
$fp = @fopen ("COM4", "w");
if (!$fp) {
   $status = "No conectado";
   
} else {
   $status = "Conectado";   
fread($fp,"10");
}
echo $status;
echo $fp;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>hola </title>
 </head>
 <body>
 
 </body>
 </html>