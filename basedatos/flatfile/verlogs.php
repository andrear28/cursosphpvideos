
<?php 

$archivoslogs = "logs.dat";
$manejador = fopen($archivoslogs, "r");
echo '<table width=100% border=3px>';

while ($datos = fgetcsv($manejador, 1000000,"|")) {

$marcadetiempo = $datos[0];
$anyo = $datos[1];
$mes =$datos[2];
$dia = $datos[3];
$hora = $datos[4];
$minuto = $datos[5];
$segundo = $datos[6];
$navegador = $datos[7];
$ip = $datos[8];

echo '<tr>

<td border="2px">'.$marcadetiempo.'</td>
<td border="2px">'.$anyo.'</td>
<td border="2px">'.$mes.'</td>
<td border="2px">'.$dia.'</td>
<td border="2px">'.$hora.'</td>
<td border="2px">'.$minuto.'</td>
<td border="2px">'.$segundo.'</td>
<td border="2px">'.$navegador.'</td>
<td border="2px">'.$ip.'</td>
</tr>';

}
echo '</table>';
 fclose($manejador);
?>