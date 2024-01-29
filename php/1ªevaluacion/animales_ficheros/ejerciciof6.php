<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: black;
            font-family: sans-serif;
        }

        header {
            color: aliceblue;
            text-align: center;
            font-size: 1.25em;
        }

        table {
            color: greenyellow;
        }

        label {

            font-size: 1.5em;
        }

        button {
            font-size: 1.3em;
            border-radius: 10px;
            background-color: greenyellow;
            color: black;
        }

        button:hover {
            background-color: white;

        }
    </style>
</head>

<body>
    <header>
        <h1>FORMULARIO USUARIO ESPAÑA</h1>
    </header>
    <table>
        <form action="#" method="post">
            <tr>
                <td>

                    <label for="nombre">Introduce tu nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre">
                </td>
            </tr>
            <tr>
                <td>

                    <label for="apellido">Introduce tu apellido</label>
                </td>
                <td>
                    <input type="text" name="apellido" id="apellido">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="provincias">Provincia</label>
                </td>
                <td>
                    <select name="provicias" id="provicias">
                        <?php
                        $contador = 1;
                        if (file_exists("provincias_ES.csv")) {
                            $abrir = fopen("provincias_ES.csv", "r");
                            while (!feof($abrir)) {
                                if ($contador == 1) {
                                    echo "<option value ='00'>--</option>";
                                    $contador++;
                                } else {
                                    $linea = fgets($abrir);
                                    $array = explode(",", $linea);

                                    ?>
                                    <option value="<?= $array[1] ?>">
                                        <?= $array[2] ?>
                                    </option>
                                    <?php


                                }
                            }
                            fclose($abrir);
                        } else {
                            $abrir = fopen("provincias_ES.csv", "a");

                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="boton">Enviar</button></td>
            </tr>

        </form>
    </table>
</body>

</html>