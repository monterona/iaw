<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enteros</title>
</head>
<body>
	<?php
		// Un entero es un número sin ninguna parte decimal
	
		$x = 5985;
		var_dump($x);

		echo "<br>";
		$y = 59.85;
		var_dump(is_int($y));

	?>
</body>
</html>