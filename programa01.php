<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 01</title>
</head>
<body>
	<center><h1>Programa 01</h1></center>

	<h2>1.- Realizar un programa que lea 3 números enteros y que imprima el número mayor.</h2><br><br>

	<?php

	$num1 = 16;
	$num2 = 12;
	$num3 = 7;

	if ($num1 > $num2 && $num1 > $num3) {
		$mayor = $num1;
	} elseif ($num2 > $num1 && $num2 > $num3) {
		$mayor = $num2;
	}else {
		$mayor = $num3;
	}

	echo "El mayor es: ".$mayor;
	
	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>