<?php 

function operaciones($num1, $num2, $operaciones){
	if ($operaciones == "suma") {
		return $num1 + $num2;
	}
	elseif ($operaciones == "resta") {
		return $num1 - $num2;
	}
	elseif ($operaciones == "multiplicacion"){
		return $num1 * $num2;
	}
	elseif ($operaciones == "division") {
		return $num1 / $num2;
	}
}

echo operaciones(3,4,"multiplicacion");

 ?>
