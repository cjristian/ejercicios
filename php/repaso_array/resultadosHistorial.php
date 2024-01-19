<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Búsqueda - Centro de Salud</title>
</head>
<body>
    <h1>Resultados de Búsqueda - Centro de Salud</h1>
    <?php
	$nombre = (isset($_GET['nombre'])?htmlspecialchars(trim($_GET['nombre'])):"");
	$historial = (isset($_GET['historial'])?htmlspecialchars(trim($_GET['historial'])):"");
	
    if (!empty($nombre) || !empty($historial)) {
		//Incluimos el array de los pacientes
		require_once ("pacientes.php");
        // Al menos un campo fue completado en el formulario
        $encontrados = 0;
        foreach ($pacientes as $hist => $datos) {
            if ((empty($nombre) || $nombre == ($datos['nombre'])) &&
                (empty($historial) || $historial == $hist)) {

                echo "<strong>Historial Médico: $hist</strong><br>";
                echo "Nombre: " . $datos['nombre'] . "<br>";
                echo "Edad: " . $datos['edad'] . " años<br>";
                echo "Historial Médico: " . $datos['historial'] . "<br><br>";
				$encontrados++;
            }
        }
        if (empty($encontrados) ) {
            echo "No se encontraron resultados.";
        } else {
			echo "Total $encontrados pacientes encontrados<br/>";
		}
        echo "<a href='buscarPacientes.php'>Volver a buscar</a>";
    } else {
        echo "No has introducido ningún valor. <a href='buscarPacientes.php'>Volver a buscar</a>";
    }
    ?>
</body>
</html>