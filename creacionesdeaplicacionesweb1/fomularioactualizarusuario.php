

<html>
<head>
  <meta charset="UTF-8">
</head>

</html>


<?php
/*session_start();


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];*/


$usuario = $_GET['usuario'];
$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];

$conexion = new pdo('sqlite:favoritos.sqlite');

$consulta= "select * from usuarios where usuario='".$usuario."'and contrasena='".$contrasena."' and nombre='".$nombre."' and apellido='".$apellido."' and edad='".$edad."'";

$resultado=$conexion->query($consulta);

 echo "<table border=3px width=100%>
	 <tr>
     <td>Usuario</td>
     <td>Contrasena</td>
     <td>Nombre</td>
     <td>Apellido</td>
     <td>Edad</td>
     <td></td>
     
     </tr>";
foreach ($resultado as $fila) {
	

	 echo "<tr><form action='actualizarusuario.php' method='post'>
      <td><input type='text' name='usuario' value='".$fila['usuario']."'></td>
      <td><input type='text' name='contrasena' value='".$fila['contrasena']."'></td>  
      <td><input type='text' name='nombre' value='".$fila['nombre']."'></td>
      <td><input type='text' name='apellido' value='".$fila['apellido']."'></td>
      <td><input type='text' name='edad' value='".$fila['edad']."'></td>
      <td><input type='submit' value='Actualizar'></td>
      </form>

      <tr>";


}

echo "</table>";

///$_SESSION['titulo']=$titulo;

$conexion=null;
?>