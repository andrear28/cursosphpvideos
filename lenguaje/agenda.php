<?php

$agenda[0]['nombre']= "luis";
$agenda[0] ['telefono']= "312435456";
$agenda[0] ['email']= "anad@mise";

$agenda[1]['nombre']= "miguel";
$agenda[1] ['telefono']= "1111111111";
$agenda[1] ['email']= "anad@mise";

$agenda[2]['nombre']= "martha";
$agenda[2] ['telefono']= "22222";
$agenda[2] ['email']= "anad@mise";

echo $agenda [2] ['nombre'];


for ($i=0; $i <=2 ; $i++) { 

	echo '
<table border=1 width=300px
<tr>
<td>
nombre:
</td>
<td>'.$agenda[$i]['nombre'].'
</td>
</tr>

<tr>
<td>
telefono:
</td>
<td>'.$agenda[$i]['telefono'].'
</td>
</tr>

<tr>
<td>
email:
</td>
<td>'.$agenda[$i]['email'].'
</td>
</tr>
</table>'
;
}

?>