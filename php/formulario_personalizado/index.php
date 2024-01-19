<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GymBros</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="#">
                <h1 class="nombre-gym">GymBros</h1>
            </a>
        </div>

        <nav>
            <a href="#">Inicio</a>
            <a href="#">Contacto</a>
            <a href="#">Informacion</a>
        </nav>
    </header>
    <section id="hero">
        <h2>Rellena este formulario de <span class="color-acento">GymBros</span></h2>


        <div class="opciones">

            <div class="carta">
                <form action="salida.php " method="post">

                    <table>
                        <tr>
                            <td><label for="nombre">Nombre y Apellido</label></td>
                            <td><input id="nombre" type="text" minlength="2" maxlength="20" name="nombre" required>
                            <td><label for="usuario">Usuario</label></td>
                            <td><input id="usuario" type="text" minlength="2" maxlength="20" name="usuario" required></td>
                            <td><input type="hidden" id="secreto_id" value="1"></td>
                            </td>
                        </tr>
                        <tr>

                            <td><label for="telefono">Telefono</label></td>
                            <td> <input id="telefono" type="tel" name="telefono" pattern="[0-9]{9}" placeholder="6XXXXXXXX"required>
                            </td>

                            <td><label for="contraseña">Contraseña</label></td>
                            <td> <input id="contraseña" type="password" minlength="2" maxlength="20"  name="contraseña" required></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Selecciona tu sexo</p>
                            </td>
                            <td> <input type="radio" name="masculino" value="masculino"> Masculino

                                <input type="radio" name="femenino" value="femenino"> Femenino
                            </td>
                            <td>
                                <label for="favcolor">Seleciona el color de tu camisa gratis:</label>
                            </td>
                            <td>


                                <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>¿Has realizado algún deporte?</p>
                            </td>
                            <td> <input type="checkbox" id="ejercicio1" name="ejercicio1" value="gimnasio">
                                <label for="ejercicio1">Gimnasio</label>

                                <input type="checkbox" id="ejercicio2" name="ejercicio2" value="moderada">
                                <label for="ejercicio2">Actividad moderada</label>

                                <input type="checkbox" id="ejercicio3" name="ejercicio3" value="baja">
                                <label for="ejercicio3">Actividad baja</label>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <p>

                                    Elige tu ciudad
                                </p>
                            </td>
                            <td><select name="ciudad" id="ciudada">
                            <?php
                                $ciudades= array("madrid", "barcelona", "sevilla", "cadiz","segovia","avila","valencia");
                                sort($ciudades);
                                foreach ($ciudades as $value) {
                                    echo "<option value=" . strtoupper($value) . ">" . strtoupper($value) . '</option>';

                                }
                                ?>
                                </select></td>

                                <td><label for="f_nacimiento">Fecha de nacimiento</label></td>
                                <td> <input id="f_nacimiento" type="date" min="1920-01-01" max=<?php
        
                                echo date("Y-m-d");
                                ?>        name="f_nacimiento" required></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="actividad">Elige tus actividades</label>
                            </td>
                            <td>
                                <select name="actividad" id="actividad" multiple>
                                <?php
                                $actividades = array("Baile", "Boxeo", "Futbol", "Baloncesto","Natacion","Gimnasio","Yoga");
                                sort($actividades);
                                foreach ($actividades as $value) {
                                    echo "<option value=" . strtoupper($value) . ">" . strtoupper($value) . '</option>';

                                }
                                ?>
                                </select>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="comentarios">Escribenos tus dudas</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>
                            </td>
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




        </div>

        </div>
    </section>

</body>

</html>