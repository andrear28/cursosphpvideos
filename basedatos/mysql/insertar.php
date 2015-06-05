<?php

$conexion = mysql_connect("localhost","cursophp","andrear");

   mysql_select_db("Agenda",$conexion);

	
	mysql_query("insert into curpp  (Nombre,Apellido,Edad,Telefono) values ('Andrea','Rodriguez','28','3142986305')");

	mysql_query("insert into curpp  (Nombre,Apellido, Edad,Telefono)values ('Miguel','Sanchez','18','312536576')");
    
    mysql_close($conexion);


?>