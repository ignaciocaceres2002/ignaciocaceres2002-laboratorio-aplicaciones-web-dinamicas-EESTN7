<?php 

	if (!empty($_POST['nombre']) && !empty($_POST['edad'])) {
		
	 	$estado;

	 	if ($_POST['edad'] < 18) {
	 		$estado = "menor";
	 	}

	 	else {
	 		$estado = "mayor";
	 	}

	 	echo "Su nombre es " . $_POST['nombre'] . " y su edad es " . $_POST['edad'] . ", por lo tanto es " . $estado;

	}

 ?>
