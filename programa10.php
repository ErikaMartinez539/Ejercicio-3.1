<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 10</title>
</head>
<body>

	<center><h1>Programa 10</h1></center>

	<h2>10.-Realizar un programa que el ingresar el carácter F indique que es femenino y si es el carácter M, indique que es masculino.</h2><br><br>

	<?php

	$caracter = "M";

	if ($caracter == "F") {
		echo "Femenino";
	} elseif ($caracter == "M") {
		echo "Masculino";
	} else {
		echo "Es inválido";
	}
	


	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>