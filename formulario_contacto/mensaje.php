<?php 

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

	$addressee = "ejemplo@mail.com";
	$title = "Consulta de Juan Pérez";

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$text = "De: $name \n";
		$text .= "Correo: $email \n";
		$text .= "Consulta: $message \n";

	mail($addressee, $title, $text);

}

?>
