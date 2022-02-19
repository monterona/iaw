<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Función trim</title>
</head>
<body>
	<?php
	
		$text   = "\t\tThese are a few words :) ...  ";
		$binary = "\x09Example string\x0A";
		$hello  = "Hello World";
		var_dump($text, $binary, $hello);

		print "\n";

		$trimmed = trim($text);
		var_dump($trimmed);

		$trimmed = trim($text, " \t.");
		var_dump($trimmed);

		$trimmed = trim($hello, "Hdle");
		var_dump($trimmed);

		$trimmed = trim($hello, 'HdWr');
		var_dump($trimmed);

		// Elimina los caracteres de control ASCII al inicio y final de $binary
		// (from 0 to 31 inclusive)
		$clean = trim($binary, "\x00..\x1F");
		var_dump($clean);

	?>
</body>
</html>