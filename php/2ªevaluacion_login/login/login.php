<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/principal.css">
</head>

<body>
    <div class="container">
        <div class="opciones">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = trim(htmlspecialchars($_POST['email']));
                $contrasena = trim(htmlspecialchars($_POST['contrasena']));
                $errores = [];
                if (empty($email)) {
                    $errores[] = "No has introducido el email";
                }
                if (empty($contrasena)) {
                    $errores[] = "No has introducido la contraseña";
                }
                if (empty($errores)) {
                    $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024"); // Abre una conexión
                    if (mysqli_connect_errno()) { // Comprueba conexión
                        printf("Conexión fallida: %s\n", mysqli_connect_error());
                        exit();
                    }
                    $query = "SELECT id , name, lastname ,email FROM user WHERE (password=md5('$contrasena') and username='$email')or(password=md5('$contrasena') and email='$email')";
                    if ($result = $conex1->query($query)) {
                        if ($fila = $result->fetch_assoc()) {
                            session_start();
                            $_SESSION['idUsuario'] = $fila['id'];
                            $_SESSION['nombre'] = $fila['name'];
                            $_SESSION['apellido'] = $fila['lastname'];
                            $_SESSION['email'] = $fila['email'];
                            $result->close();
                            $conex1->close();
                            header("Location:user.php");
                            exit();
                        } else {
                            //Si ha ejecutado algun resultado
                            $mensaje = $bandera ? "Te has conectado correctamente" : "No coinciden tus credenciales";
                            echo "<div class='letras'>$mensaje</div>";
                        }
                    }
                } else {
                    foreach ($errores as $key) {
                        echo "<div class='letras'>$key</div>";
                    }
                }
            }
            ?>


            <img src="img/logo.png" alt="fotoLogo">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <table>
                    <tr>
                        <td>
                            <input txype="text" name="email" id="email" placeholder="Nombre del usuario"><br />
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña"><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit">Acceder</button>
                        </td>
                    </tr>
                </table>
                <a href="registrar.php" style="text-decoration: none; color:black;">Registrate</a>
            </form>

        </div>
    </div>

</body>

</html> -->