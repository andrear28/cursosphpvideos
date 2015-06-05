<?php
/**
* 
*/
class saluda 
{
	
function saludo(){echo "yo te saludo";}	
function adios(){echo "yo te digo adios";}	

}
/**
* 
*/
class subsaluda extends saluda
{
	var $att;

	function  hola()
	{
		
	}
}
$instancia = new subsaluda();
$ins = $instancia->adios();


?>