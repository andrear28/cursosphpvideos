<?php
session_start();
//crear variables
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

$addtitulo = $_POST['titulo'];
$adddireccion = $_POST['direccion'];
$addcategoria = $_POST['categoria'];
$addcomentario = $_POST['comentario'];
$addvaloracion = $_POST['valoracion'];

//conexion

$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta= $conexion-> exec("insert into favoritos values('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion');");

//$resultado=$conexion->query($consulta);
//$conexion = new PDO('sqlite:favoritos.sqlite');
echo "
<html>
<head>
	<meta http-equiv='REFRESH' content='0'; url='principal.php'>
</head>
</html>

";
$conexion=null;
?>