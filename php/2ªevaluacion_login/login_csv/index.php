<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container">

            <h1 class="logo">GYMBROS </h1>
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Contacto</a>
                <a href="#">Informacion</a>
            </nav>
        </div>
    </header>

    <div class="container">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = strtolower(trim(htmlspecialchars($_POST['nombre'])));
            $contraseña = trim(htmlspecialchars($_POST['contraseña']));
            if (!empty($nombre)) {
                $error[] = "El nombre no esta bien escrito";
            }
            if (!empty($contraseña)) {
                $error[] = "La contraseña no esta bien escrito";
            }

            if (!empty($error)) {
                $mifichero = fopen(__DIR__ . "/comprobacion.csv", "r");
                $bandera = false;
                while ($linea = fgetcsv($mifichero)) {
                    $miUsuario = $linea[0];
                    $miContraseña = $linea[1];
                    if ($miUsuario === $nombre && $miContraseña === $contraseña) {
                        header("Location: entrada.php");
                        $bandera = true;
                        exit("Usuario y contraseña correctos");
                    }
                }
                fclose($mifichero);
                if (!$bandera) {
                    echo "<p>Usuario y contraseña incorrectos</p>";

                }


            } else {
                echo "<p>Estan vacias los cuadros de formulario </p>";
            }

        }
        ?>
        <div class="gird-container">


            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

                <label class="gird_item" for="nombre">Usuario</label>
                <input class="gird_item" type="text" name="nombre" id="nombre" minlength="4" maxlength="20">
                <label class="gird_item" for="contraseña">Contraseña</label>
                <input class="gird_item" type="password" name="contraseña" id="contraseña" minlength="5" maxlength="5">
                <button class="gird_item" type="submit">Enviar</button>
            </form>


        </div>

    </div>

</body>

</html>