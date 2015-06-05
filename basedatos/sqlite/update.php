<?php
$conexion = new PDO('sqlite:biblioteca.sqlite');

$consulta = "update discos set Artista = 'andrea' where Artista= 'andrea echeverry'";
$data = $conexion->query($consulta);

$conexion=null;
?>