<?php

$ventas= array("Muebles" => 42418 , "Electronica" => 281832 , "Salud y bienestar" => 30432 , "Inmuebles" => 1232344);

	$countRubro=0;
	$suma=0;

	echo '<table border="1">';

	foreach ($ventas as $rubro => $recaudacion) {

		echo "<tr>";
			echo "<td>" . $rubro . "</td>"; 
			echo "<td> $" . $recaudacion . "</td>"; 
		echo "<tr>";

			if ($recaudacion>250000) {
				$countRubro++;
			}

			$suma+=$recaudacion;
	}

	echo '</table>';

	echo "Cantidad de rubros que recaudaron más de $250.000: " . $countRubro . "</br>";
	echo "Recaudacion general $" . $suma . "</br>";

  ?>
