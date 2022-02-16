<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting Strings y Floats a Integers</title>
</head>
<body>
	<?php
		/* A veces es necesario convertir un
		   valor numérico en otro tipo de datos.
		 */

		// Convertir flotante a entero
		$x = 25548.7765;
		$cast_x = (int)$x;
		echo $cast_x . "<br>";
		var_dump($cast_x);

		echo "<br>";

		// Convertir cadena a entero
		$y = "21625.175";
		$cast_y = (int)$y;
		echo $cast_y . "<br>";
		var_dump($cast_y);
	?>
</body>
</html>