<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funciones Matemáticas</title>
</head>
<body>
	<?php
		$a = pi();
		echo $a . "<br>";

		$b = min (0, 12, 134, -43, -754, 235);
		echo $b . "<br>";

		$c = max (23, 45, 67, 86, 0, -47, 3, -987);
		echo $c . "<br>";

		$d = abs (-56.97);
		echo $d . "<br>";

		$e = round(54.33);
		echo $e . "<br>";

		$f = rand();
		$g = rand (10, 100); // Número aleatorio entre 10 y 100
		echo $f . "<br>";
		echo $g . "<br>";
	?>
</body>
</html>