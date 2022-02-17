<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		//Definición de variables
		$a = 1.23456789;
		$b = 1.23456780;
		$epsilon = 0.00001;


		/* Aquí introduzco una sentencia if
			con la condición que se cumple */
		echo $a - $b;
		var_dump ($a-$b);

		echo "<br>";
		if(abs($a-$b) < $epsilon) {
		    echo "true";
		}
	?>
</body>
</html>