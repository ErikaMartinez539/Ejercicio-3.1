<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 03</title>
</head>
<body>

	<center><h1>Programa 03</h1></center>

	<h2>3.- Dado el sueldo de un empleado, calcular su nuevo saldo si obtiene un aumento de 15% si si sueldo es menor que $1000, si es mayor a 1000 su aumento es solo del 10%</h2><br><br>

	<?php

	$sueldo =1678;

	if ($sueldo < 1000) {
		$aumento = 15 * $sueldo / 100;
		$nuevosueldo = $aumento + $sueldo;
	} elseif ($sueldo > 1000) {
		$aumento = 10 * $sueldo / 100;
		$nuevosueldo = $aumento + $sueldo;
	} 

	echo "El nuevo sueldo del empleado es: " .$nuevosueldo;

	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>