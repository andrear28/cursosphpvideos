
<?php


//conexion-------------------------------------------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');

//crear una tabla de favoritos----------------------------------------------

$consultafav = "CREATE TABLE favoritos(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
titulo Char(40) Not Null,
direccion Char(100)Not Null,
categoria Char(40),
comentario Char(200),
valoracion Int)";








//crear una tabla de usuarios-------------------------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');

$consultausu ="CREATE TABLE usuarios(
usuario Char(40)Not Null,
contrasena Char(40)Not Null,
nombre Char(100)Not Null,
apellido Char(40)Not Null,
edad Int
)";




$conexion = new PDO('sqlite:favoritos.sqlite');

$consultalogs="CREATE TABLE logs(
utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(40),
usuario Char(40),
contrasena Char(40))";

$favoritos = $conexion->exec($consultafav);
$usuarios = $conexion->exec($consultausu);
$logs = $conexion->exec($consultalogs);



$insert = $conexion->exec("INSERT INTO favoritos VALUES('andrea', 'andreac', 'gmail', 'http://www.gmail.com', 'Tecnologia', 'Esta es un correo electronico', 20 )");
$insert = $conexion->exec("INSERT INTO favoritos VALUES('sasa','12345','twitter','http://www.twitter.com','Tecnologia','es una red social',11)");


$insert = $conexion->exec("INSERT INTO usuarios VALUES('maria', '12345', 'maria fernada', 'Rodriguez', 20)");
$insert = $conexion->exec("INSERT INTO usuarios VALUES('andrea','54321','Andrea','Plazas Rodriguez', 18)");



$insert = $conexion->exec("INSERT INTO logs Values (0000000,2011,04,23,17,03,00,'127.0.0.1','chrome','camilo','123')");
$insert = $conexion->exec("INSERT INTO logs Values (1234567,2014,11,04,23,56,27,'127.0.0.1','Internet Explorer','juan','juan12')");

$conexion=null;




?>