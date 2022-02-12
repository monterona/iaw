<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>While</title>
</head>
<body>
	<?php
		$s=0;
		$c=0;
		while ($c<50) {
			$c++;
			$s=$s+$c*$c;
			print $c;
			echo ("<br>");
		}
		echo ("La suma del cuadrado de 1 a 50 es:" . $s);
	?>
</body>
</html>