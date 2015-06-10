<?php
//session_start();
session_start();

$contador=0;

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
//comprobar si el usuario existe

$conexion = new PDO('sqlite:favoritos.sqlite');
$consul=$conexion-> query("select * from usuarios");
var_dump($consul);
foreach ($fila as $consul){
	
if ($fila['usuario']==$usuario){
	
	$contador++;

}else{


}

}
$conexion=null;

if ($contador == 0) {
	


$conexion = new PDO('sqlite:favoritos.sqlite');

$consulta = $conexion-> exec("INSERT into usuarios values('$usuario','$contrasena','$nombre','$apellido','$edad',3);");
var_dump($consulta);
echo "<br/>".$consulta." <br/>";



$conexion=null;

echo '

<html>
</<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="REFRESH" content="0; url=gestionusuarios.php">
</head>
<body>

</body>
</html>

';
}else{
	echo "el nombre del usuario ya existe";
}
?>