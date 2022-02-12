<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Integer</title>
</head>
<body>
	<?php
		$a = 1234;
		$b = -123;
		$c = 0123; //número octal (83 en decimal)
		$d = 0x1A; //número hexadecimal (26 en decimal)
		$e = 0b11111111; //número binario (255 en decimal)
		var_dump($c);
		echo ("Hola");

		//Conversiones entre sistemas numéricos
		echo (octdec($c) . "<br>");
		echo (hexdec($d) . "<br>");
		echo bindec($e);
	?>
</body>
</html>