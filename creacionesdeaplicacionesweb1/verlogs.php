<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>

<?php

$conexion = new ('sqlite:favoritos.sqlite');<!DOCTYPE html>


session_start();
//echo "el usuario es <br>".$_SESSION['usuario']."<br> y tu contraseña es <br> ".$_SESSION['contrasena'];

/*
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
contrasena Char(40))"
*/

$consulta="select * from logs;";

$conexion = new PDO('sqlite:favoritos.sqlite');
echo $consulta;
$data=$conexion-> query($consulta);
var_dump($data);
echo'
	 <table border=3px width=100%>
	 <tr>
     <td>marca de tiempo</td>
     <td>anio</td>
     <td>mes</td>
     <td>dia</td>
     <td>hora</td>
     <td>minuto</td>
     <td>segundo</td>
     <td>ip</td>
     <td>navegador</td>
     <td>usuario</td>
     <td>contrasena</td>
     
     </tr>';
foreach ($data as $row) {
	

	 echo "<tr>
      <td>".$row['usuario']."</td>
      <td>".$row['contrasena']."</td>
      <td>".$row['nombre']."</td>
      <td>".$row['apellido']."</td>
      <td>".$row['edad']."</td>
      
     
      <td><a href='eliminarusuario.php?usuario=".$row['usuario']."&contrasena=".$row['contrasena']."&nombre=".$row['nombre']."&apellido=".$row['apellido']."&edad=".$row['edad']."'=>Eliminar</a></td>

      <td><a href='fomularioactualizarusuario.php?usuario=".$row['usuario']."&contrasena=".$row['contrasena']."&nombre=".$row['nombre']."&apellido=".$row['apellido']."&edad=".$row['edad']."'=>Actualizar</a></td></tr>";
	
	 	
}

echo "
<tr>
<form action='crearusuario.php' method='POST'>
<td><input type='text' name='usuario'></td>
<td><input type='text' name='contrasena'></td>
<td><input type='text' name='nombre'></td>
<td><input type='text' name='apellido'></td>
<td><input type='text' name='edad'></td>


<td><input type='submit' value='Guardar'></td>
<td></td>
</form>
</tr>

";
echo "</table>";
$conexion=null;

?>





?>