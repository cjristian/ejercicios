<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Html</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <?php require 'header.php'; ?>
    <?php echo date("Y/m/d"); ?>

    </br></br></br>
    <table>

        <tr>
            <th>Mejores que el</th>
            <th>Equipos</th>
            <th>Mujeres</th>
        </tr>
        <tr>
            <td>Nadie</td>
            <td>Barcelona</td>
            <td>Nadie</td>
        </tr>
        <tr>
            <td>Casi le gana el bicho</td>
            <td>Paris</td>
            <td>Antonella</td>
        </tr>
        <tr>
            <td>Nadie</td>
            <td>Miami</td>
            <td>Una de primaria</td>

        </tr>

    </table>

    </br></br></br>
    <img src="img/messi1.jfif" alt="primera foto">
    <img src="img/messi2.jfif" alt="segunda foto">

    </br></br></br>
    <form method="get" action="/my-handling-form-page">
        <ul>
            <li>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user_name">
            </li>
            <li>
                <label for="mail">Correo electrónico:</label>
                <input type="email" id="mail" name="user_email">
            </li>
            <li>
                <label for="msg">Mensaje:</label>
                <textarea id="msg" name="user_message"></textarea>
            </li>

        </ul>
        <input type="reset" value="Enviar">
    </form>

    <?php require 'footer.php'; ?>
   
   
</body>

</html>