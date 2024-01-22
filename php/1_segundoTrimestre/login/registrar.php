<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <p class="display-1">Registro</p>

            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="col-12 mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                    <label for="user" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="user" name="user">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" placeholder="correo@correo.com" id="email" name="email">
                    <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" placeholder="correo@correo.com" id="nacimiento"
                        name="nacimiento">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-block btn-primary">Enviar</button>
                </div>
            </form>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = trim(htmlspecialchars($_POST['nombre']));
                $apellido = trim(htmlspecialchars($_POST['apellido']));
                $miUsuario = trim(htmlspecialchars($_POST['user']));
                $contrasena = md5(trim(htmlspecialchars($_POST['contrasena'])));
                $email = trim(htmlspecialchars($_POST['email']));
                $nacimiento = trim(htmlspecialchars($_POST['nacimiento']));
                $errores = [];
                if (empty($nombre)) {
                    $errores[] = "No has introducido tu nombre";
                }
                if (empty($apellido)) {
                    $errores[] = "No has introducido tu apellido";
                }

                if (empty($miUsuario)) {
                    $errores[] = "No has introducido el usuario";
                }
                if (empty($contrasena)) {
                    $errores[] = "No has introducido la contraseña";
                }

                if (empty($email)) {
                    $errores[] = "No has introducido el email";
                }
                if (empty($nacimiento)) {
                    $errores[] = "No has introducido tu fecha de nacimiento";
                }



                if (empty($errores)) {
                    $bandera = false;
                    $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024"); // Abre una conexión
                    if (mysqli_connect_errno()) { // Comprueba conexión
                        printf("Conexión fallida: %s\n", mysqli_connect_error());
                        exit();
                    }
                    $stm = $conex1->prepare("SELECT username , email FROM user WHERE username=? or email=?");
                    $stm->bind_param('ss', $miUsuario, $email);
                    $stm->execute();
                    $result = $stm->get_result();
                    while ($fila = $result->fetch_assoc()) {
                        if (($fila['username'] == $miUsuario) || ($fila['email'] == $email)) {
                            $bandera = true;
                            break;
                        }
                    }
                    $stm->close();

                    if (!$bandera) {
                        $stm = $conex1->prepare("INSERT INTO user (name, lastname, username, password, email ,birthday) VALUE (?, ?, ?, ?, ?, ?)");
                        $stm->bind_param('ssssss', $nombre, $apellido, $miUsuario, $contrasena, $email, $nacimiento);
                        if ($stm->execute()) {
                            $stm->close();
                            header("Location: login.php");
                        } else {
                            die("Error en la consulta al guardar los datos del nuevo usuario");
                        }

                    } else {
                        $errores[] = "El nombre de usuario o correo electrónico ya existe";
                        echo '<div class="alert alert-danger mt-4" role="alert">';
                        foreach ($errores as $key) {
                            echo "<strong><p>$key<p></strong>";
                        }
                        echo "</div>";
                    }
                    $conex1->close();
                } else {

                    ?>
                    <?php echo '<div class="alert alert-danger mt-4" role="alert">';
                    foreach ($errores as $key) {
                        echo "<strong><p>$key<p></strong>";
                    }
                    echo "</div>";

                }
            }
            ?>

        </div>
    </div>
</body>

</html>