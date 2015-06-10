<?php


$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$edad= $_GET['edad'];

$conexion= new PDO('sqlite:favoritos.sqlite');
$consulta="delete from usuarios where usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido='".$apellido."' AND edad='".$edad."'";

$resultado = $conexion-> exec($consulta);

echo "
<html>
<head>
	<meta http-equiv='REFRESH' content='0'; url='gestionusuarios.php'>
</head>
</html>
";
$conexion=null;

?>