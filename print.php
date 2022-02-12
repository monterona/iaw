<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comando print</title>
</head>
<body>
	<?php
		$txt1 = "Esta es la variable txt1";
		$txt2 = "en el IES Polígono Sur con Joaquinma.";
		$x = 5;
		$y = 9;

		print "<h1>" . $txt1 . "</h2><br>";
		print "<h1>Aprendo PHP " . $txt2 . "</h1><br>";
		print "x + y = " . ($x + $y);
	?>
</body>
</html>