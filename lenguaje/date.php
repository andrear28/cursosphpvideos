<?php
echo date("d </br>");

echo date("D </br>");

echo date("l </br>");

echo date("N </br>");

echo date("v </br>");

echo date("z </br>");

echo date("W </br>");

echo date("F </br>");

echo date("m </br>");

echo date("M </br>");

echo date("n </br>");

echo date("t </br>");

echo date("Y </br>");

echo date("y </br>");

echo date("L </br>");

echo date("c </br>");

echo date("U </br>");

echo date(" a </br>");

echo date("A </br>");

echo date("B </br>");

echo date("g </br>");

echo date("G </br>");

echo date("h </br>");

echo date("H </br>");

echo date("i </br>");

echo date("s </br>");

echo date("u </br>");

echo date("e </br>");

echo date("I </br>");

echo date("O </br>");


echo "hoy es miercoles".date("1").",".date("j")."de".date("F")."el".date("Y");

function dametiempo(){
	switch (date("1")) {
		case "Monday":
			$dia ="Lunes";
			break;
		
		case "Tuesday":
			$dia ="martes";
			break;
		
		case "wednesdat":
			$dia ="miercoles";
			break;

			case "thursday":
			$dia ="jueves";
			break;

			case "frinday":
			$dia ="viernes";
			break;

			case "saturday":
			$dia ="Sabado";
			break;

			case "sunday":
			$dia ="Domingo";
			break;
		

	

	switch (date("F")) {
		case 'January':
			$mes="Enero";
			break;
		case 'January':
			$mes="Eneo";
			break;
		
		case 'February':
			$mes="Febrero";
			break;
		
		case 'March':
			$mes="Marzo";
			break;
		
		case 'april':
			$mes="Aril";
			break;
		
		case 'May':
			$mes="Mayo";
			break;
		
		case 'june':
			$mes="Junio";
			break;
		
		case 'july':
			$mes="Julio";
			break;
		
		case 'August':
			$mes="Agosto";
			break;
		
		case 'September':
			$mes="Septiembre";
			break;
		
		case 'October':
			$mes="Octubre";
			break;
		
		case 'November':
			$mes="Noviembre";
			break;

			case 'December':
			$mes="Diciembre";
			break;
		
		
		
	}
}

	echo "hoy es".$dia.",".date("j").$mes."el".date("Y");
	dametiempo();
}

?>