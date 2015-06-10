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



################################################################################

$conexion = new pdo('sqlite:capitulo5.sqlite');

$consulta ="CREATE TABLE cofgusuarios(
usuario Char(40)Not Null,
piel Char(100),
respuestas char(40)
)";


$resultado=$conexion-> exec($insert);

$conexion = null;

#################################################################################################33333

$conexion = new pdo('sqlite:capitulo5.sqlite');


//CERRAR
$insert = $conexion->exec("INSERT INTO cofgusuarios VALUES('andrea','blanca','si')");
$resultado=$conexion-> exec($insert);

$conexion = null;






###################################################################################################33
$conexion = new pdo('sqlite:capitulo5.sqlite');

$consulta ="CREATE TABLE post(
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


$resultado=$conexion-> exec($consulta);
$conexion = null;


?>