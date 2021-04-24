<?php 

/*
	Dada una edad saber si es bebe, niño, adolescente o adulto. bebe<2, niño 3-12, adolescente 13-17, y adulto 18
*/

$edad=24;

if ($edad<=2) {
	echo "es un bebe";
}
elseif ($edad<=12) {
	echo "es un niño";
}
elseif ($edad<=17) {
	echo "es un adolescente";
}
else {
	echo "es un adulto";
}

/*
	Generar un switch para seleccionar los dias de la semana
*/

$dia=3;

switch ($dia) {
	case 1:
		echo "es lunes";
		break;
	case 2:
		echo "es martes";
		break;
	case 3:
		echo "es miercoles";
		break;
	case 4:
		echo "es jueves";
		break;
	case 5:
		echo "es viernes";
		break;
	case 6:
		echo "es sabado";
		break;
	case 7:
		echo "es domingo";
		break;
	
	default:
		echo "por favor, introduzca un numero del 1 al 7";
		break;
}


 ?>
