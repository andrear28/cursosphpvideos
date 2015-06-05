<?php
//obtener variables
session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$conexion= new pdo('sqlite:favoritos.sqlite');

$consulta="SELECT * FROM usuarios;";

$resultado= $conexion-> query($consulta);

echo $usuario." ".$contrasena."<br/>";

foreach ($resultado as $fila) {
	
	$usuariobasedatos=$fila['usuario'];
	$contrasenabasedatos=$fila['contrasena'];
	echo "<br/>".$usuariobasedatos." ".$contrasenabasedatos."<br/>";
	if ($usuario==$usuariobasedatos & $contrasena==$contrasenabasedatos) {
		
      $_SESSION['usuario']=$usuario;
      $_SESSION['contrasena']=$contrasena;

echo '
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=principal.php">
</head>
</html>
';

	}else {
		
echo 'error los datos son incorrectos';

	}




}

$conexion=null;
?>