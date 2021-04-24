<?php


$hosting = array("INICIO" => 4318, "GALERIA" => 1182, "CONTACTO" => 3012, "SERVICIO" => 2311);

arsort($hosting);

	echo '<table border="1">';

	$suma = 0;

	foreach ($hosting as $hostings) {
		$suma = $suma + $hostings;
	}

	foreach ($hosting as $pagina => $cant_visitas) {

		$cant_visitaspor = $cant_visitas / $suma * 100;

		$cant_visitaspor = round($cant_visitaspor, 0);

		echo "<tr>";
		echo "<td>" . $pagina . "</td>";
		echo "<td>" . $cant_visitas . " y " . $cant_visitaspor . " % </td>";
		echo "<tr>";

	}
