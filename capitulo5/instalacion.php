<?php

#####################################################33
//CONEXION
$conexion = new pdo('sqlite:capitulo5.sqlite');

//PETICION

$consulta ="CREATE TABLE usuarios(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
nombre Char(100),
apellidouno char(40),
apellidodos char(40),
descripcion char(40),
foto char(40),
webpersonal char(40),
email char(40),
permisos char(40),
)";

//EJECUTAR
$resultado=$conexion-> exec($consulta);

//CERRAR
$insert = $conexion->exec("INSERT INTO usuarios VALUES('andrea', 'andreac','andrea','Andrea','Rodriguez','plazas','es un correo electronico','http://www.gmail.com', 'Tecnologia', 'Esta es un correo electronico', 20 )");

$conexion = null;

#####################################################
//CONEXION
$conexion = new pdo('sqlite:capitulo5.sqlite');

//PETICION
$consulta ="CREATE TABLE usuarios(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
nombre Char(100),
apellidouno char(40),
apellidodos char(40),
descripcion char(40),
foto char(40),
webpersonal char(40),
email char(40),
permisos char(40),
)";
//EJECUTAR
$resultado=$conexion-> exec($consulta);

//CERRAR

$conexion = null;

################################################################################

$conexion = new pdo('sqlite:capitulo5.sqlite');

$insert = $conexion-> exec("INSERT INTO usuarios VALUES('andrea', 'andreac','andrea','Andrea','Rodriguez','plazas','es un correo electronico','http://www.gmail.com', '', 'Esta es un correo electronico', 20 )");

$resultado=$conexion-> exec($insert);




?>