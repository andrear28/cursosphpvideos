<?php
//se realiza la conexion
$conexion = mysql_connect("localhost","cursophp","andrear");
//Estructura de control por si falla
if (!$conexion) {
	die("no se ha podido conectar a la base de datos".mysql_error());
   //selecciono la base de datos
   mysql_select_db("Agenda",$conexion);
//listo los elementos de la base de datos
   $peticion = mysql_query("select * from curpp");

   while ($fila= mysql_fetch_array($peticion)) {
   	echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".$fila['Telefono'];
   echo "<br>";
   }
} 
//cerrar la conexion
mysql_close($conexion);

?>