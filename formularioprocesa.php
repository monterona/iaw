<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario procesa información</title>
</head>
<body>
	<?php
		$usuario = $_GET['usuario'];
		$departamento = $_GET['departamento'];
		echo "El usuario es: " . $usuario;
		echo "<br>";
		print ("El departamento es:  $departamento");
	?>
</body>
</html>