<?php 

	$productos= array("Sillon" => 20500 , "Silla" => 3020 , "Mesa" => 32700 , "Escritorio" => 23810);

		$producto="Mesa";
		$cant=2;
		$total=0;

		foreach ($productos as $product => $precio_unit) {

			if ($product == $producto) {

				$total = $precio_unit * $cant;

				echo "El total para " . $cant . " " . $producto . " es de " . $total;

			}

	}

 ?>
