<!DOCTYPE html>
<html>
<head>
    <title>Buscar Pacientes - Centro de Salud</title>
</head>
<body>
    <h1>Buscar Pacientes - Centro de Salud</h1>
    <p>Introduce el nombre o número de historial del paciente para buscar</p>
    <form action="resultadosHistorial.php" method="GET">
        <label for="nombre">Nombre del paciente:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="historial">Número de historial:</label>
        <input type="text" name="historial" id="historial">
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
