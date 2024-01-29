<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        * {
            box-sizing: border-box;
        }

        header {
            margin: 0;
            background-color: aquamarine;
        }

        body {
            background-color: bisque;
            font-family: 'Roboto', sans-serif;
        }

        a {
            background-color: aquamarine;
        }

        a:hover {
            background-color: blue;
        }

        .container h1 {
            text-align: center;
            color: blue;
            font-weight: bold;


        }

        .container nav {
            text-align: center;
        }

        .container nav a {
            text-decoration: none;
            padding: 12px;
            color: black;
            font-weight: bold;

        }

        .container nav a :hover {
            background-color: beige;
            color: beige;

        }

        #hero h2 {
            text-align: center;
            color: blue;
        }

        .container table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }




        table {

            border: black 2px solid;

        }

        td,
        th {
            border: black 1px solid;
            background-color: white;

        }

        button:hover {
            background-color: rgb(255, 255, 235);

        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                HOSPITAL 12 DE OCTUBRE
            </h1>

            <nav>
                <a href="#">INICIO </a>
                <a href="#">INFORMACIÓN</a>
                <a href="#">CUENTA</a>
            </nav>
        </div>
    </header>


    <section id="hero">
        <h2>FORMULARIO</h2>
        <div class="container">
            <table>


                <form action="validacion.php" method="post" >
                    <tr>

                        <td><label for="usuario">Nombre</label></td>
                        <td><input id="usuario" type="text" minlength="2" maxlength="20" name="usuario" required>
                        </td>
                    </tr>
                    <tr>

                        <td><label for="tarjeta">Tarjeta Sanitaria</label></td>
                        <td> <input id="tarjeta" type="number" minlength="14" maxlength="14" name="tarjeta" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="f_nacimiento">Fecha de nacimiento</label></td>
                        <td> <input id="f_nacimiento" type="date" min="1920-01-01" max=<?php

                        echo date("Y-m-d");
                        ?>        name="f_nacimiento" required></td>
                    </tr>
                    <tr>
                        <td><label for="especialista_m">Especialistas</label></td>
                        <td><select name="especialistas">
                                <?php
                                $especialistas = array("neurologo", "cirujano", "medico", "traumatologo");
                                sort($especialistas);
                                foreach ($especialistas as $value) {
                                    echo "<option value=" . strtoupper($value) . ">" . strtoupper($value) . '</option>';

                                }
                                ?>
                            </select></td>
                        </td>
                    </tr>

                    <tr>

                        <td><label for="f_cita">Fecha de la cita</label></td>
                        <td> <input id="f_cita" type="date" min=<?php
                        $fecha_actual = date("Y-m-d");
                        echo date("Y-m-d", strtotime($fecha_actual . "+ 3 days"));
                        ?> name="f_cita" required>
                        </td>
                    </tr>
                    <tr>
                        <div class="required checkbox">
                            <td> <label for="newsletter-input"><a href="/content/2-aviso-legal">Acepto politica de
                                        Privacidad
                                    </a></label></td>
                            <td>
                                <div class="checker" id="uniform-customer_privacy">
                                    <input type="checkbox" value="0" required name="customer_privacy"
                                        autocomplete="off">
                                </div>
                            </td>

                        </div>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <div class="boton">

                                <button type="submit" title="Ingresar" name="Ingresar">Enviar</button>
                            </div>
                        </td>
                    </tr>
                </form>
            </table>
        </div>

    </section>
    <br>
</body>

</html>