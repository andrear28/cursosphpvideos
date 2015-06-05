<?php 
//con esta funcion preparo una tabla de multiplicar.

function mitabla($num){
for ($multi=0; $multi <=10 ; $multi++) { 
	
	echo $num."x".$multi."=".$num*$multi."<br>";

}
}
mitabla(5);
for ($nume=0; $nume <=10; $nume++) { 
	
	echo "tabla del ".$nume;
	mitabla($nume);
}

?>