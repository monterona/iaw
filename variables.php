<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Variables en PHP</title>
</head>
<body>
	<?php
		$txt = "iespoligonosur.org";
		echo "Me gusta PHP y lo estudio en el " . "<b>" . $txt . "!" . "<b>";
		echo "<br>";
		var_dump($txt);
		echo "<br>";
		
		$salario = 937.25;
		var_dump($salario);
		echo "<br>";

		$llueve = true;
		var_dump($llueve);
		echo "<br>";
	?>
</body>
</html>
