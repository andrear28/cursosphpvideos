<?php
/**
* 
*/
class primerObjeto 
{
	var $att;
	function primerObjeto ($algo)
	{
		$this->att=$algo;

		echo $this->att;
	}

	

}
$decir = new primerObjeto("hola");


?>