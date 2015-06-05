<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$permisos = $_POST['permisos'];

$conexion= new pdo('sqlite:favoritos.sqlite');

$consulta= $conexion-> exec("insert into usuarios values('$usuario','$contrasena','$nombre','$apellido','$edad','$permisos'");


$conexion=null;


?>