<?php
session_start();
if (!isset($_SESSION['idUsuario'])) {

    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $_SESSION["nombre"] ?>
    </title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <table>

            <?php
            $id_usuario = $_SESSION['idUsuario'];
            $conex1 = new mysqli("localhost", "Cjristian", "vpDbBb!2Mlz2JRCa", "cjristian2024");
            if (mysqli_connect_errno()) {
                exit();
            } else {
                echo "<h1>Conectado correctamente a la base de datos.</h1>";
            }
            $query = "SELECT  s.name , a.calification, a.date FROM user_calification a, subject s WHERE a.id_user='$id_usuario' and a.id_subject=s.id ";
            if ($result = $conex1->query($query)) { // Sí hay resultados
                echo "Las notas de " . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . " son :";
                while ($fila = $result->fetch_assoc()) { // Extrae fila apuntada y apunta a la siguiente
                    echo "<tr><td>" . $fila['name'] . "</td><td>" . $fila['calification'] . "</td><td>" . $fila['date'] . "</td></tr>";
                }
                $result->close(); // libera recursos
            }
            $conex1->close(); // cierra conexión
            


            ?>

        </table>
        <button type="submit">Cerrar sesion</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_SESSION['idUsuario'])) {
            session_destroy();
            header("Location: login.php");
        }
    }
    ?>

</body>

</html>