<?php 

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacion = $_POST['opera'];
	$res;

		switch ($operacion) {

	 		case "sumar": $res = $num1 + $num2 ;
	 			break;
	 		case "restar": $res = $num1 - $num2;
	 			break;
	 		case "multip": $res = $num1 * $num2;
	 			break;
	 		case "divid": if($num2==0){
				
				break;
		
			}

			else {
				
				$res = $num1 / $num2;
			}
	 			
	 		break;
	 		
	 	}

	echo "El resultado es " . $res;
	echo "<br> <a href='index.php'> Volver </a>";

 ?>
