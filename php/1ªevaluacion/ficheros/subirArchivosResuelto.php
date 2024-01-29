<!DOCTYPE html>
<html lang="es">

<head>
	<title>Selector de Archivos</title>
</head>

<body>

	<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
		<input type="color" name="color"><br />
		<label for="archivo">Selecciona un archivo:</label>
		<input type="file" name="archivo" id="archivo" accept=".txt"><br />
		<br>
		<input type="submit" value="Subir">
	</form>
	<?php
	echo "<hr/><pre>";
	const MAX_FILE = 1048576;
	const TIPO_MIME = "text/plain";

	if (!empty($_FILES)) {
		$tamanio_archivo = $_FILES["archivo"]["size"];
		$nombre_archivo = $_FILES["archivo"]["tmp_name"];
		$tipo_archivo = $_FILES["archivo"]["type"];

		if (($tamanio_archivo <= 0) || ($tamanio_archivo > MAX_FILE)) {
			$errores[] = "Tamaño de archivo incorrecto";
		}

		if (($tipo_archivo != TIPO_MIME)) {
			$errores[] = "Formato de archivo incorrecto";
		}

		if (empty($errores)) {
			$color = (empty($_POST["color"]) ? "#0000FF" : htmlspecialchars(trim($_POST["color"])));
			echo "<p style='color:$color;'>";

			//	echo file_get_contents($nombre_archivo);
	
			$fichero = fopen($nombre_archivo, "r");
			while (!feof($fichero)) {
				echo fgets($fichero);
			}
			fclose($fichero);

			echo "</p>";
		} else {
			echo "<p style='color:red;'>";
			foreach ($errores as $e) {
				echo $e;
			}
			echo "</p>";
		}

	}
	echo "</pre>";
	?>
</body>

</html>