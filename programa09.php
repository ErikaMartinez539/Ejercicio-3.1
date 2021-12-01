<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 09</title>
</head>
<body>

	<center><h1>Programa 09</h1></center>

	<h2>9.-Realizar un algoritmo para calcular el sueldo semanal de un trabajador, se sabe que si trabaja 40 horas o menos se le pagará $25 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $30 por hora.</h2><br><br>

	<?php

	$horas =45;

	if ($horas <= 40) {
		$sueldo = $horas * 25;
		echo "El sueldo es: " .$sueldo ."pesos";
	} else {
		$sueldo = $horas * 30;
		echo "El sueldo es: " .$sueldo ."pesos";
	}
	


	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>