<!DOCTYPE html>
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
                $contraseña = trim(htmlspecialchars($_POST['contraseña']));
                $errores = [];
                if (empty($email)) {
                    $errores[] = "No has introducido el email";
                }
                if (empty($contraseña)) {
                    $errores[] = "No has introducido la contraseña";
                }
            }


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($errores)) {
                    $mifichero = fopen(__DIR__ . "/files/users_aula_virtual.csv", "r");
                    $bandera = false;
                    while (($linea = fgetcsv($mifichero))) {
                        if (is_numeric($linea[0])) {
                            $miUsuario = $linea[1];
                            $miContraseña = $linea[2];
                            if (($miUsuario === $email) && ($miContraseña === md5($contraseña))) {
                                $bandera = true;
                                session_start();
                                $_SESSION['idUsuario'] = $linea[0];
                                $_SESSION['nusuario'] = $linea[3];
                                $_SESSION['pusuario'] = $linea[4];
                                $_SESSION['tusuario'] = $linea[5];
                                header("Location: header.php");
                                exit();
                            }
                        }
                    }
                    fclose($mifichero);
                    $mensaje = $bandera ? "Te has conectado correctamente" : "No coinciden tus credenciales";
                    echo "<div class='letras'>$mensaje</p>";
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
                            <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña"><br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit">Acceder</button>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

</body>

</html>