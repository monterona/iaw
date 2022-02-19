<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funciones de cadena de PHP</title>
</head>
<body>
	<?php
		echo strlen("Devuelve la longitud de la cadena") . "<br>"; // 33

		echo str_word_count("Cuenta las palabras en una cadena") . "<br>"; // 6
		
		echo strrev("Invierte la cadena de caracteres") . "<br>"; // seretcarac ed anedac al etreivnI
		
		echo strpos("Busca un texto dentro de una cadena de caracteres", "una") . "<br>"; // Posición 25
		
		echo str_replace("vaca", "oveja", "¡Es el mejor queso de vaca que he comido!"). "<br>"; // Es el mejor queso de oveja que he comido

		echo strtolower("Convierte a minúsculas una cadena de caracteres"). "<br>";

		echo strtoupper("Convierte a mayúsculas una cadena de caracteres"). "<br>";

		//Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.
		echo strcmp("Hola", "hola"). "<br>"; 

		
	?>
</body>
</html>