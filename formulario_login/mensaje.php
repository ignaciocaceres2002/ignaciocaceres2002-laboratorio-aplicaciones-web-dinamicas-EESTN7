<?php 

	$usuarios = array ('Juan'=>'1234', 'Carla'=>'adivina', 'Luis'=>'luisito', 'Carlos'=>'nomeacuerdo');

	$nombre=$_POST['username'];
	$clave=$_POST['pass'];


	foreach($usuarios as $user => $pass){


	if ($user==$nombre) {

		if ($pass== $clave) {
			
			echo "Ingreso exitoso :)";
		}
		
	else {

		echo "Contraseña incorrecta";
		
		}

	}

	else {

		echo "Nombre incorrecto";

	}


?>
