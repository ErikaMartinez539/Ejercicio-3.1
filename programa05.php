<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programa 05</title>
</head>
<body>

	<center><h1>Programa 05</h1></center>

	<h2>5.-Realizar un programa que indique si una carácter, es vocal o consonante.</h2><br><br>

	<?php

	$caracter = "g";

	switch ($caracter) {
		case 'a':
			echo "Es vocal";
			break;
		case 'e':
			echo "Es vocal";
			break;
		case 'i':
			echo "Es vocal";
			break;
		case 'o':
			echo "Es vocal";
			break;
		case 'u':
			echo "Es vocal";
			break;
		
		default:
			echo "Es una cosonante";
			break;
	}
	

	?>

	<a href="index.html" aling = "left"><h3>Regresar a menú</h3></a>

</body>
</html>