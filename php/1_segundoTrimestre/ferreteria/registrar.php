<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    //Listar las ferreterias existentes
    //Dar de alta Ferreterias nuevas
    require_once("config.php");
    $conn = new mysqli(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);
    if ($conn->connect_errno) {
        echo " Fallo de conexion" . $conn->connect_error;
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = trim(htmlspecialchars($_POST['nombre']));
        $direccion = trim(htmlspecialchars($_POST['direccion']));
        $cp = trim(htmlspecialchars($_POST['cp']));
        if (empty($nombre)) {
            $errores[] = "No has introducido tu nombre";
        }
        if (empty($direccion)) {
            $errores[] = "No has introducido tu direccion";
        }

        if (empty($cp)) {
            $errores[] = "No has introducido el Codigo Postal";
        }
        if (empty($errores)) {
            $stm = $conn->prepare("INSERT INTO store (name , address,cp) VALUES (?,?,?)");
            $stm->bind_param('sss', $nombre, $direccion, $cp);
            if ($stm->execute()) {
                echo "Se ha introducido";
                $stm->close();

            } else {
                die("Error al insertar en la base de datos: ");
            }

        } else {
            foreach ($errores as $key) {
                echo "$key" . "<br/>";
            }
        }


    }

    $query = "SELECT id, name, address , cp FROM store";
    $result = $conn->query($query);
    if ($result->num_rows == 0) {
        echo "No hay ferreterias";
    } else {
        while ($fila = $result->fetch_assoc()) {
            ?>
            <table>
                <tr>
                    <td>
                        <?= $fila['id'] ?>
                    </td>

                    <td>
                        <?= $fila['name'] ?>
                    </td>

                    <td>
                        <?= $fila['address'] ?>
                    </td>

                    <td>
                        <?= $fila['cp'] ?>
                    </td>
                </tr>
            </table>
            <?php

        }






    }
    $conn->close();
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="nombre">Nombre de la ferreteria</label><br />
        <input type="text" name="nombre" id="nombre" required><br />
        <label for="direccion">Dirección </label><br />
        <input type="text" name="direccion" id="direccion" required><br />
        <label for="cp">Código Postal: </label><br />
        <input type="text" pattern="[0-9]{5}" placeholder="XXXXX" name="cp" id="cp" required>
        <br /><br />
        <input type="submit" value="Añadir Ferretería">
    </form>
</body>

</html>