<?php
@$tuip = getenv(REMOTE_ADDR);
echo "tu IP es".$tuip."<br>";
$tunavegador = $_SERVER["HTTP_USER_AGENT"];
echo "tu sistema operativo y navegador es:".$tunavegador;

?>