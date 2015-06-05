
<html>
<head>
  <meta charset="UTF-8">
</head>

</html>


<?php
session_start();


$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$titulo = $_GET['titulo'];
$direccion = $_GET['direccion'];
$categoria = $_GET['categoria'];
$comentario = $_GET['comentario'];
$valoracion = $_GET['valoracion'];

$conexion = new pdo('sqlite:favoritos.sqlite');

$consulta= "select * from favoritos where usuario='".$usuario."'and contrasena='".$contrasena."' and titulo='".$titulo."' and direccion='".$direccion."' and categoria='".$categoria."'and comentario='".$comentario."' and valoracion='".$valoracion."'";

$resultado=$conexion->query($consulta);

 echo "<table border=3px width=100%>
	 <tr>
     <td>Titulo</td>
     <td>Direccion</td>
     <td>Categoria</td>
     <td>Comentario</td>
     <td>Valoracion</td>
     <td></td>
     
     </tr>";
foreach ($resultado as $fila) {
	

	 echo "<tr><form action='actualizar.php' method='post'>
      <td><input type='text' name='titulo' value='".$fila['titulo']."'></td>
      <td><input type='text' name='direccion' value='".$fila['direccion']."'></td>
      <td><select name='categoria'>
      <option value='salud'>Salud</option>
      <option value='trabajo'>Trabajo</option>
      <option value='hobby'>Hobby</option>
      <option value='personal'>Personal</option>
      <option value='otros'>Otro</option>
      <option value='".$fila['categoria']."'selected>".$fila['comentario']."</option>
      </select>
      </td>
      <td><input type='text' name='categoria' value='".$fila['categoria']."'></td>
      <td><input type='text' name='comentario' value='".$fila['comentario']."'></td>
      <td><input type='text' name='valoracion' value='".$fila['valoracion']."'></td>
      <td><input type='submit'></td>
      </form>

      <tr>";


}

echo "</table>";

$_SESSION['titulo']=$titulo;

$conexion=null;
?>