<?php
session_start();

$privar="hola";
$_SESSION['segunda varible']= "Adios";
echo $privar;

echo "<a href='destino.php'> voy al destino </a>";

?>