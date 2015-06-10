<?php
$conexion= mysql_connect("localhost","cursophp","andrear");

if (!$conexion) {
	die('no eh podido encadenar'.mysql_error());
   
}

if (mysql_query("CREATE DATABASE Agenda",$conexion)) {
echo "se ha creado la base de datos";

}else{
echo "no se ha podido crear la base de datos por esl siguiente error:"  .mysql_error();

}

//preparo esta peticion
mysql_select_db("Agenda",$conexion);

$sql = "CREATE TABLE curpp(
idpersona int not null auto_increment,
primary key	(idpersona),
Nombre varchar(15),
Apellido varchar(15),
Edad int, 
Telefono int
)";

//ejecuto la peticion
mysql_query($sql,$conexion);

//cerrar conexion
mysql_close($conexion);

?>