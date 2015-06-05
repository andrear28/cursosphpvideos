<?php


$conexion = mysql_connect("localhost","cursophp","andrear");

if (!$conexion) {
	die("no se ha podido conectar a la base de datos".mysql_error());
   
   mysql_select_db("Agenda",$conexion);

}
	
	
	mysql_query("insert into curpp  (Nombre,Apellido, Edad,Telefono)
		values ('Martha','gimenez','28','312536576')");
    
    mysql_close($conexion);





?>