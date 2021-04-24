<!DOCTYPE html>
<html>
<head>
	<title> Ejercicio </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
</head>
<body>

	<form action="mensaje.php" method="post">

		<input type="text" name="num1" placeholder="Ingrese el primer numero" required=””>
		<input type="text" name="num2" placeholder="Ingrese el segundo numero" required=””>
		<br>
		<input type="radio" name="opera" value="sumar" id="sumar">
			<label for="primario"> Sumar </label>
		<br>
		<input type="radio" name="opera" value="restar" id="restar">
			<label for="primario"> Restar </label>
		<br>
		<input type="radio" name="opera" value="multip" id="multip">
			<label for="primario"> Multiplicar </label>
		<br>
		<input type="radio" name="opera" value="divid" id="divid">
			<label for="primario"> Dividir </label>
		<br>
		<input type="submit" name="submit" value="ENVIAR">
		
	</form>

</body>
</html>
