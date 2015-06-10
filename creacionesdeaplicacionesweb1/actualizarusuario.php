<?php


//session_start();



//$usuario = $_SESSION['usuario'];
//$contrasena = $_SESSION['contrasena'];


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
//$tituloantiguo= $_SESSION['titulo'];

$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta= "update  usuarios set usuario='".$usuario."' and contrasena='".$contrasena."' and nombre='".$nombre."' and apellido='".$apellido."' and edad='".$edad."'";

$update = $conexion->exec($consulta);

echo "
<html></<!DOCTYPE html>
<html>
<head>
  <meta http-equiv='REFRESH' content='0' url='gestionusuarios.php'>
</head>

</html>

";
$conexion=null;
?>