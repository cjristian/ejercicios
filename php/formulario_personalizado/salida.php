<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    </h1>

    <?php

    if (!empty($_POST['nombre'])) {
        $nombre = trim($_POST['nombre']);
        if (strlen($nombre) == 0) {
            $errors[] = "El nombre esta vacio";
        } else {
            if ((strlen($nombre) < 2) || (strlen($nombre) > 20)) {
                $errors[] = "El nombre no tienen la longitud necesaria ";
            } else {
                if (!ctype_alpha($nombre)) {
                    $errors[] = "No puedes escribir tu nombre con numeros ";

                }

            }

        }
    }
    if (!empty($_POST['usuario'])) {
        $nombre = trim($_POST['usuario']);
        if (strlen($nombre) == 0) {
            $errors[] = "El usuario esta vacio";
        } else {
            if ((strlen($nombre) < 2) || (strlen($nombre) > 20)) {
                $errors[] = "El usuario no tienen la longitud necesaria ";
            }

        }
    }
    if (!empty($_POST['password'])) {
        $nombre = trim($_POST['password']);
        if (strlen($nombre) == 0) {
            $errors[] = "La contraseña esta vacia";
        } else {
            if ((strlen($nombre) < 2) || (strlen($nombre) > 20)) {
                $errors[] = "La contraseña no tienen la longitud necesaria ";
            }

        }
    }


    if (!empty($_POST['telefono'])) {
        $telefono = trim($_POST['telefono']);
        if (strlen($telefono) != 9) {
            $errors[] = "La longitud de tu telefono no es el correcto  ";
        }
    } else {
        if (!is_numeric($telefono)) {
            $errors[] = "Tienes que proporcionar numeros en tu telefono";
        }
    }



    if (empty($errors)) {
        echo "<p>FELICIDADES TU FORMULARIO ESTA ESCRITO CORRECTAMENTE</p>";

    } else {
        echo "<h2>Lo siento, tu formularo posee los siguietes errores</h2>";
        for ($i = 0; $i < count($errors); $i++) {
            echo "<p style='color:red'>" . $i + 1 . "º " . $errors[$i] . "</p><br/>";
        }
    }



    ?>
</body>

</html>