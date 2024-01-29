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
        $apellidos = trim(htmlspecialchars($_POST['apellidos']));
        $username = trim(htmlspecialchars($_POST['username']));
        $contraseña = trim(htmlspecialchars($_POST['password']));
        $errores = [];
        if (empty($nombre)) {
            $errores[] = "No has introducido el nombre";
        }
        if (empty($apellidos)) {
            $errores[] = "No has introducido la apellidos";
        }
        if (empty($contraseña)) {
            $errores[] = "No has introducido la contraseña";
        }
        if (empty($username)) {
            $errores[] = "No has introducido la username";
        }
    }
    ?>
    <h1>Registro</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" minlength="2" maxlength="30">
        <br><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" minlength="2" maxlength="30">
        <br><br>
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" placeholder="Nombre del usuario">
        <br><br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña">

        <button type="submit">Acceder</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($errores)) {
            $contraseña1=md5($contraseña);
            $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024"); // Abre una conexión
            if (mysqli_connect_errno()) { // Comprueba conexión
                printf("Conexión fallida: %s\n", mysqli_connect_error());
                exit();
            } else {
                echo "<h1>Conectado correctamente a la base de datos.</h1>";
            }
            $query = "INSERT INTO user( name,lastname,username,password )VALUES ('$nombre','$apellidos','$username','$contraseña1')";
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