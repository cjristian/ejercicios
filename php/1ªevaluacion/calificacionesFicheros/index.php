<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: rgb(41, 40, 39);
        }

        header {
            background-color: black;
            text-align: center;

        }

        h1 {
            text-align: center;
            color: aliceblue;
        }

        .container {
            display: flex;
            align-items: center;
            flex-direction: column;

        }

        table {
            font-size: 1.5em;
            color: greenyellow;
        }

        button {
            border: 2px solid black;
            font-size: 1em;
            padding: 2px 4px;
            border-radius: 5px;
            background-color: greenyellow;

        }

        button:hover {
            background-color: aliceblue;
        }

        p {
            color: red;
        }
    </style>
</head>

<body>
    <header>

        <h1>AÑADIR ALUMNOS</h1>
    </header>

    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <table>
                <tr>
                    <td><label for="id">Id:</label></td>
                    <td><input type="text" minlength="4" maxlength="4" name="id" id="id"></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" minlength="2" maxlength="30" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td><label for="apellido">Apellido:</label></td>
                    <td><input type="text" name="apellido" minlength="2" maxlength="30" id="apellido"></td>
                </tr>
                <tr>
                    <td>

                        <label for="nota">Nota :</label>
                    </td>
                    <td>

                        <input type="number" name="nota" id="nota" min="0" max="10">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> <button type="submit" title="boton" name="boton">Añadir</button></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['id'])) {
            $id = trim($_POST['id']);
            if (strlen($id) == 0) {
                $errors[] = "El id esta vacio";
            } else {
                if (strlen($id) !=4 ){
                    $errors[] = "El id no tiene la longitud necesaria";
                } else {
                    if (!ctype_alpha($id)) {
                        $errors[] = "No puedes escribir tu id con numeros ";

                    }

                }

            }
        }
        if (!empty($_POST['nombre'])) {
            $nombre = trim($_POST['nombre']);
            if (strlen($nombre) == 0) {
                $errors[] = "El nombre esta vacio";
            } else {
                if ((strlen($nombre) < 2) || (strlen($nombre) > 31)) {
                    $errors[] = "El nombre no tienen la longitud necesaria ";
                } else {
                    if (!ctype_alpha($nombre)) {
                        $errors[] = "No puedes escribir tu nombre con numeros ";

                    }

                }

            }
        }

        if (!empty($_POST['apellido'])) {
            $apellido = trim($_POST['apellido']);
            if (strlen($apellido) == 0) {
                $errors[] = "El apellido esta vacio";
            } else {
                if ((strlen($apellido) < 2) || (strlen($apellido) > 31)) {
                    $errors[] = "El apellido no tienen la longitud necesaria ";
                } else {
                    if (!ctype_alpha($apellido)) {
                        $errors[] = "No puedes escribir tu apellido con numeros ";

                    }

                }

            }
        }

        if (!empty($_POST['nota'])) {
            $nota = trim($_POST['nota']);
            if (((strlen($nota) <= 0) || (strlen($nota) >= 10))) {
                $errors[] = "La nota es desde 0 a 10";
            }
        } else {
            if (!is_numeric($nota)) {
                $errors[] = "Tienes que proporcionar numeros en la seccion notas";
            }
        }


        if (empty($errors)) {
            $linea = "$id;$nombre;$apellido;$nota\n";
            $mificehro = fopen("calificaciones.csv", "a");
            fwrite($mificehro, $linea);

            fclose($mificehro);
            echo "Se ha añadido correctamente el alumno";
        } else {
            foreach ($errors as $key) {
                echo "<p>" . $key . "</p>";
                echo "<br>";
            }
        }
    }
    ?>

</body>

</html>