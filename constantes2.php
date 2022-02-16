<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constantes son globales</title>
</head>
<body>
	<?php
		// Las constantes son globales por definición

		define ("saludo", "Bienvenido al IES Polígono Sur");
		
		function probando () {
			echo saludo;
		}

		probando ();
	?>
</body>
</html>