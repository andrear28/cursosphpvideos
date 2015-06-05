<?php

$conexion = new PDO('sqlite:biblioteca.sqlite');  
//echo "conexion realizada";
$consulta = 'CREATE TABLE discos(
artista VARCHAR(40) NOT NULL,
disco VARCHAR(40) NOT NULL,
anio Integer)';
$conexion=$conexion->exec($consulta);
//$count = $conexion->exec("INSERT INTO animals(id_tipo,id_name) VALUES ('kiwi', 'troy')");


?>