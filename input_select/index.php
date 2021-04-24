<!DOCTYPE html>
<html>
<head>
	<title> Input y Select </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
</head>
<body>

	<form action="mensaje.php" method="post">

		<input type="text" name="nombre" placeholder="Ingrese su nombre" required=””>
		<br>
		<select name="estudios" value="primario" id="primario" required=””>
			<label for="primario"> Primario </label>
		<br>
		<select name="estudios" value="secundario" id="secundario" required=””>
			<label for="primario"> Secundario </label>
		<br>
		<select name="estudios" value="Terciario" id="terciario" required=””>
			<label for="primario"> Terciario </label>
		<br>
		<select name="estudios" value="universitario" id="universitario" required=””>
			<label for="primario"> Universitario </label>
		<br>
		<select name="submit" value="ENVIAR">
			
	</form>

</body>
</html>
