<?php

$archivo = "text.txt";
$contenido ="este es mi contenido";

$manejador = fopen($archivo, 'a+');
fwrite($manejador, $contenido);



?>