<?php
$conexion = new PDO('sqlite:biblioteca.sqlite');

$consulta = "delete discos  where Artista='andrea'";
$data = $conexion->query($consulta);


?>