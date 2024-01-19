<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		* {
			box-sizing: border-box;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>

<body>
	<h1>
		COMPROBACIONDE ERRORES DE TU FORMULARIO
	</h1>

	<?php
	//nombre, nss, especialista, fecha
	if (!empty($_POST['usuario'])) {
		$nombre = trim($_POST['usuario']);
		if (strlen($nombre) == 0) {
			$errors[] = "El nombre esta vacio";
		} else {
			if ((strlen($nombre) < 2) || (strlen($nombre) > 20)) {
				$errors[] = "El nombre no tienen la longitud necesaria ";
			} else {
				if (!ctype_alpha($nombre)) {
					$errors[] = "No puedes escribir tu nombre con numeros ";

				}

			}

		}
	}


	if (!empty($_POST['tarjeta'])) {
		$tarjeta = trim($_POST['tarjeta']);
		if (strlen($tarjeta) != 14) {
			$errors[] = "La longitud de tu tarjeta sanitaria no son correctos  ";
		}
	} else {
		if (!is_numeric($tarjeta)) {
			$errors[] = "Tienes que proporcionar numeros en la tarjeta sanitaria";
		}
	}

	if (empty($errors)) {
		echo "<p>FELICIDADES TU FORMULARIO ESTA ESCRITO CORRECTAMENTE</p>";

	} else {
		echo "<h2>Lo siento, tu formularo posee los siguietes errores</h2>";
		for ($i = 0; $i < count($errors); $i++) {
			echo "<p style='color:red'>" . $i + 1 . "º " . $errors[$i] . "</p><br/>";
		}
	}



	?>

</body>

</html>