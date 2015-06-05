<?php
$conexion = mysql_connect("localhost","cursophp","andrear");

mysql_select_db("Agenda",$conexion);

mysql_query("update curpp set Edad='28' where Nombre='Martha' and Apellido='gimenez'");
 
mysql_close($conexion);

?>