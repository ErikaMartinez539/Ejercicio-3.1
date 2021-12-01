<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 02</title>
</head>
<body>

	<center><h1>Programa 02</h1></center>

	<h2>2.- Leer 5 calificaciones de un alumno, obtener el promedio e imprimir "aprobado" si su calificación es mayor o igual que 6 y "reprobado" si es menor que 6.</h2><br><br>

	<?php

	$calf1 =6;
	$calf2 =5;
	$calf3 =8;
	$calf4 =6;
	$calf5 =4;

	$scalf = $calf1 + $calf2 + $calf3 + $calf4 + $calf5;
	$promedio= $scalf / 5;

	if ($promedio >= 6) {
		echo "Aprobado";
	} elseif ($promedio < 6) {
		echo "Reprobado";
	}
	

	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>