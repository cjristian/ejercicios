<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar pelicula</title>
</head>

<body>
    <?php
    require_once("config.php");
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = trim(htmlspecialchars($_GET['id']));
        $errores = [];
        if (empty($id)) {
            $errores[] = "No has introducido ningun id de pelicula";
        }

        if (!empty($errores)) {
            $conex1 = new mysqli(BBBB_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);
            if ($conex1->connect_errno) {
                echo "No se ha podido entrar en la base de datos" . $conex1->connect_error;
            }
            $query = ("DELETE id_pelicula FROM pelicula WHERE id_pelicula=?");
            $resultado = $conex1->prepare($query);
            $resultado->bind_param('i', $id);

            if ($resultado->execute()) {
                echo "Se ha borrado el id de la pelicula correspondiente";

            } else {
                echo "No se ha podido borrar nada";
            }

            $resultado->close();
            $conex1->close();
        } else {
            foreach ($errores as $key) {
                echo $key;
            }
        }
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <label for="id">Pon el numero de id de la pelicula</label><br />
        <input type="number" name="id" id="id" >
        <button type="submit" name="boton" id="boton">Eliminar</button>
    </form>

</body>

</html>