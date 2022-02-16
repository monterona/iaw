<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadenas numéricas</title>
</head>
<body>
	<?php

		/* is_numeric() se puede usar para
		   encontrar si una variable es numérica
		 */

		$x = 5985;
		var_dump(is_numeric($x));

		$y = "5985";
		var_dump(is_numeric($y));

		$z = "59.85" + 100;
		var_dump(is_numeric($z));

		$v = "Hello";
		var_dump(is_numeric($v));
	?>
</body>
</html>