<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTROS</title>

</head>

<body>
    <table>


        <?php
        $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024"); // Abre una conexión
        if (mysqli_connect_errno()) { // Comprueba conexión
            printf("Conexión fallida: %s\n", mysqli_connect_error());
            exit();
        } else {
            echo "<h1>Conectado correctamente a la base de datos.</h1>";
        }
        $query = "SELECT * FROM animal";
        if ($result = $conex1->query($query)) { // Sí hay resultados
            $result->data_seek(0); // Apunta a la primera fila
            while ($fila = $result->fetch_assoc()) { // Extrae fila apuntada y apunta a la siguiente
                ?><tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['especie'] ?></td>
                    <td><?php echo $fila['edad'] ?></td>

                </tr>
                <?php
            }
         }

        ?>
    </table>
</body>

</html>