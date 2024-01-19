<!DOCTYPE html>
<html lang="es">
<head>
    <title>Limpiar CSV</title>
</head>
<body>
<?php
	const TIPO_FICHERO = "text/csv";
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		if (!empty($_FILES["fichero"]))  {
			/*echo "<pre>";
				var_dump($_FILES);
				echo "</pre>";
				*/
			$fichero = $_FILES["fichero"];
			$tipo = $fichero["type"];
			if ($tipo == TIPO_FICHERO) {
				$path_fichero = $fichero["tmp_name"];
				$fichero_origen = fopen($path_fichero, "r");
				
				$lineas_salida = array();
				while ($linea = fgetcsv($fichero_origen)) {
					$lineas_salida[$linea[0]] = $linea;
				}
				echo "<pre>";
				var_dump($lineas_salida);
				echo "</pre>";
			
				$nombre = strtolower($fichero["name"]);
				$nombre_nuevo = str_replace(".csv", "_nuevo.csv", $nombre);
				$fichero_destino = fopen (__DIR__."/files/".$nombre_nuevo, "w");
				foreach ($lineas_salida as $l) {
					fputcsv($fichero_destino, $l);
				}
				fclose($fichero_destino);
				
			} else {
				$errores[] = "Formato de fichero incorrecto, debe ser de tipo " .TIPO_FICHERO;
			}
		} else {
			$errores[] = "No se ha adjuntado un fichero";
		}
		
	}
?>
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
	 <label for="fichero">Fichero:</label>
	 <input type="file" id="fichero" name="fichero" accept="text/csv" />
    <br>
    <input type="submit" value="Añadir">
</form>
<p name="errores" style="color:red;">
<?php
if (($_SERVER["REQUEST_METHOD"]=="POST")) {
	if (!empty($errores) ) { 
		echo implode (". ",$errores) ."."; 
	} else {
		echo "Fichero $nombre_nuevo creado correctamente";
	}
}
?>
</p>
</body>
</html>