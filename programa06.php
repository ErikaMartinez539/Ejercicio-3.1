<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 06</title>
</head>
<body>

	<center><h1>Programa 06</h1></center>

	<h2>6.- Escribe un programa que pida el año actual y un año cualquiera y muestre un mensaje
     diciendo cuántos años faltan para llegar a ese año (si es posterior al actual), cuántos han
     transcurrido desde ese año (si es anterior), o si ese año es el actual.</h2><br><br>

	<?php

	$añoat = 1985;
	$añocl = 1993;

	if ($añoat > $añocl) {
		$años = $añoat - $añocl;
		echo "Falta ".$años ." años";
	} elseif ($añoat < $añocl) {
		$años = $añocl - $añoat;
		echo "Han pasado " .$años ." años";
	}else {
		echo "Es el año actual";
	}
	

	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>