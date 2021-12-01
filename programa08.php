<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 08</title>
</head>
<body>

	<center><h1>Programa 08</h1></center>

	<h2>8.- Leer un número y que indique que día de la semana representa 1- Lunes, 2.- Martes, 3.- Miércoles, 4.- Jueves, 5.- Viernes, 6.- Sábado, 7 Domingo, cualquier otro número que imprima el mensaje "Número inválido"</h2><br><br>

	<?php

	$numero = 5;

	switch ($numero) {
		case '1':
			echo "Lunes";
			break;
		case '2':
			echo "Martes";
			break;
		case '3':
			echo "Miércoles";
			break;
		case '4':
			echo "Jueves";
			break;
		case '5':
			echo "Viernes";
			break;
		case '6':
			echo "Sábado";
			break;
		case '7':
			echo "Domingo";
			break;

		default:
			echo "Número inválido";
			break;
	}


	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>