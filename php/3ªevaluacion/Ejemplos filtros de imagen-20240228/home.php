<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo imagen dinámica</title>
        <script src="./js/functions.js"></script>
    </head>
    <body>
        <div class="container">
                <div class="col">
                    <img src="imagen.php" id="foto" style="width:300px;">
                    <hr>
                    <div id="opciones">
                        <div>
                            <input type="radio" name="filtro" id="original" checked>
                            <label for="original">Original</label>
                        </div>
                        <div>
                            <input type="radio" name="filtro" id="grises">
                            <label for="grises">Escala de grises</label>
                        </div>
                        <div>
                            <input type="radio" name="filtro" id="azules">
                            <label for="azules">Tonos de azules</label>
                        </div>
                        <div>
                            <input type="radio" name="filtro" id="invertida">
                            <label for="invertida">Invertida</label>
                        </div>
                        <div>
                            <input type="radio" name="filtro" id="pixelada">
                            <label for="pixelada">Pixelada</label>
                        </div>
						<div>
                            <input type="radio" name="filtro" id="ejemplo1">
                            <label for="pixelada">Ejemplo1</label>
                        </div>
						<div>
                            <input type="radio" name="filtro" id="ejemplo2">
                            <label for="pixelada">Ejemplo2</label>
                        </div>
                    </div>
                    <hr/>
                    <button type="button">Descargar</button>
                </div>
            </div>
    </body>
</html>