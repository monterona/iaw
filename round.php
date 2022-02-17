<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Función round()</title>
</head>
<body>
	<?php
		$x = 8 - 6.4;
		$y = 1.6;

		echo $x;
		echo "<br>";
		echo $y . "<br>";

		var_dump($x);
		echo "<br>";
		var_dump($y);
		echo "<br>";



		if ($x == $y) {
		 	echo "Iguales";
		} else {
			echo "Distintos";
		}

		//$x = $y;
		echo "<br>";
		var_dump($x == $y);


		echo "<br>";
		$x = round ($x,2);
		$y = round ($y,2);

		var_dump($x == $y);
	?>
</body>
</html>