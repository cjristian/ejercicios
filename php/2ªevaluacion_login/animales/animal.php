<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTROS</title>

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim(htmlspecialchars($_POST['name']));
        $especie = trim(htmlspecialchars($_POST['especie']));
        $edad = trim(htmlspecialchars($_POST['edad']));

        $errores = [];
        if (empty($nombre)) {
            $errores[] = "No has introducido el nombre del animal";
        }
        if (empty($especie)) {
            $errores[] = "No has introducido la especie del animal";
        }
        if (empty($edad)) {
            $errores[] = "No has introducido la edad";
        }
    }
    ?>
    <h1>Registro</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" minlength="2" maxlength="30">
        <br><br>
        <label for="especie">Especie</label>
        <input type="text" name="especie" id="especie" minlength="2" maxlength="30">
        <br><br>
        <label for="edad">edad</label>
        <input type="number" name="edad" id="edad">
        <br>
        <button type="submit">Acceder</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($errores)) {
            $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024"); // Abre una conexión
            if (mysqli_connect_errno()) { // Comprueba conexión
                printf("Conexión fallida: %s\n", mysqli_connect_error());
                exit();
            } else {
                echo "<h1>Conectado correctamente a la base de datos.</h1>";
            }
            $query = "INSERT INTO animal( nombre,especie,edad )VALUES ('$nombre','$especie','$edad')";
            if ($conex1->query($query) === TRUE) {
                echo "Registro insertado correctamente";
            } else {
                echo "Error al insertar el registro: " . $conn->error;
            }

            $conex1->close(); // cierra conexión
        } else {
            foreach ($errores as $key) {
                echo $key;
            }

        }
    }
    ?>
</body>

</html>