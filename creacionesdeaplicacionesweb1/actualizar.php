<?php
session_start();



$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$titulo = $_POST['titulo'];
$direccion = $_POST['direccion'];
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$valoracion = $_POST['valoracion'];
$tituloantiguo= $_SESSION['titulo'];

$conexion = new PDO('sqlite:favoritos.sqlite');
$consulta= "update  favoritos set titulo='".$titulo."' and direccion='".$direccion."' and categoria='".$categoria."' and comentario='".$comentario."' and valoracion='".$valoracion."'";

$update = $conexion->exec($consulta);

echo "
<html></<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='REFRESH' content='0' url='principal.php'>
</head>

</html>

";
$conexion=null;
?>