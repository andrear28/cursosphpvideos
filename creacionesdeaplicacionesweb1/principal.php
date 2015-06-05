<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<?php
session_start();
//echo "el usuario es <br>".$_SESSION['usuario']."<br> y tu contraseña es <br> ".$_SESSION['contrasena'];

$consulta="select * from favoritos where usuario='".$_SESSION['usuario']."' and contrasena='".$_SESSION['contrasena']."';";

$conexion = new PDO('sqlite:favoritos.sqlite');
echo $consulta;
$data=$conexion-> query($consulta);
var_dump($data);
echo'
	 <table border=3px width=100%>
	 <tr>
     <td>Titulo</td>
     <td>Direccion</td>
     <td>Categoria</td>
     <td>Comentario</td>
     <td>Valoracion</td>
     
     </tr>';
foreach ($data as $row) {
	

	 echo "<tr>
      <td>".$row['titulo']."</td>
      <td>".$row['direccion']."</td>
      <td>".$row['categoria']."</td>
      <td>".$row['comentario']."</td>
      <td>".$row['valoracion']."</td>
     
      <td><a href='eliminarfavorito.php?titulo=".$row['titulo']."&direccion=".$row['direccion']."&categoria=".$row['categoria']."&comentario=".$row['comentario']."&valoracion=".$row['valoracion']."'>Eliminar</a></td>
	  <td><a href='formactualizar.php?titulo=".$row['titulo']."&direccion=".$row['direccion']."&categoria=".$row['categoria']."&comentario=".$row['comentario']."&valoracion=".$row['valoracion']."'>Actualizar</a></td></tr>";
	
	 	
}

echo "
<tr>
<form action='crearfavorito.php' method='POST'>
<td><input type='text' name='titulo'></td>
<td><input type='text' name='direccion'></td>
<td><select name='categoria'>
<option value='salud'>Salud</option>
<option value='trabajo'>Trabajo</option>
<option value='hobby'>Hobby</option>
<option value='personal'>Personal</option>
<option value='otros'>Otro</option>
</select>
</td>
<td><input type='text' name='comentario'></td>
<td><input type='text' name='valoracion'></td>
<td><input type='submit'></td>
<td></td>
</form>
</tr>

";
echo "</table>";
$conexion=null;
?>
