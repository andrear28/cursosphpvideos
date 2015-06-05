
<?php
$conexion = mysql_connect("localhost","cursophp","andrear");

if (!$conexion) {
	die(mysql_error());
      
}
mysql_select_db("Agenda",$conexion);
$peticion = mysql_query("select * from curpp where Nombre='Andrea'");

while ($fila = mysql_fetch_array($peticion)) {
	
	echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".$fila['Telefono'];
    
    echo "<br>";

}

mysql_close($conexion);

?>