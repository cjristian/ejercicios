<?php
	// Contará el número de accesos empleando cookies . Para ello establecemos valores de la cookie
	$nombre = 'CuentaDAW2';
	if (!isset($_COOKIE[$nombre])) // sí no hay entrada en $_COOKIE para cuentaASIR2
	$veces = 1; // ponemos el contador de accesos a 1
	else // en caso contrario
	$veces = $_COOKIE[$nombre] + 1; // ponemos contador de accesos al valor de la cookie más 1
	$fecha_expiracion = mktime(13, 14, 0, 16, 2, 2024); // Expira el 15/03/2012 a las 00:00:00
	$path = $_SERVER['REQUEST_URI']; // Esta cookie sólo la verá el script actual
	setcookie($nombre, $veces, $fecha_expiracion, $path, '', 0); // enviamos la cookie
?>
<html> <head> <title>PHP: Contador de Accesos con cookies </title></head>
<body>
<?php
if ($veces == 1) // Es la primera vez
	echo "Bienvenido por primera vez a nuestra página\n";
else
	echo "Has visitado nuestra página $veces veces\n";
?>
<br>Pulsa <a href='cookies.php'>aquí</a> para volver a visitarnos...
</body>
</html>