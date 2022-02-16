<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operadores de asignación</title>
</head>
<body>
	<?php
		$x = 5;
		$y = 7;

		echo ($x = $y) . "<br>"; // x = y
		echo ($x += $y) . "<br>"; // x = x + y 
		echo ($x -= $y) . "<br>"; // x = x - y 
		echo ($x *= $y)  . "<br>"; // x = x * y 
		echo ($x /= $y)  . "<br>"; // x = x / y
		echo ($x %= $y)  . "<br>"; // x= x % y
	?>
</body>
</html>