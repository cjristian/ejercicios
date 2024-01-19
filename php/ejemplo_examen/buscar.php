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
            font-family: sans-serif;
            margin: 0;
        }

        header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;

            background-color: coral;

        }

        table {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;

        }
    </style>
</head>

<body>
    <header>

        <h1>PÁGINA DE BÚSQUEDA DE EJEMPLARES</h1>

    </header>

    <section>
        <br>
        <br>
        <br>
        <table>
            <form action="resultados.php" method="post">

                <tr>
                    <td><label for="titulo">Titulo del libro:</label></td>
                    <td><input id="titulo" type="text" name="titulo" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="author">Autor del libro:</label></td>
                    <td><input id="author" type="text" name="author" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="isbn">ISBN :</label></td>
                    <td><input id="isbn" type="number" pattern="[0-9]{13}" name="isbn" required>
                </tr>
                <tr>
                    <td colspan="2">

                        <div class="boton">

                            <button type="submit" title="Ingresar" name="Ingresar">Buscar</button>
                        </div>
                    </td>
                </tr>
            </form>
        </table>

    </section>
</body>

</html>