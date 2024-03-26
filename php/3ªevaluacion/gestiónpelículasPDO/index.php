<?php
const IMG_NAME = "./img/foto.jpg";

$filter = (!empty($_GET["filter"]) ? $_GET["filter"] : "");
$im = @imagecreatefromjpeg(IMG_NAME);
header('Content-Type: image/jpeg');

$error = false;
switch ($filter) {
    case "":
    case "original":
        break;
    case "grises":
        $error = !($im && imagefilter($im, IMG_FILTER_GRAYSCALE));
        break;
    case "pixelada":
        $error = !($im && imagefilter($im, IMG_FILTER_PIXELATE, 10));
        break;
    default:
        $error = true;
}

if ($error) {
    $im = imagecreatetruecolor(600, 600);
    $red = imagecolorallocate($im, 200, 0, 0);
    imagefill($im, 500, 100, $red);
    $textcolor = imagecolorallocate($im, 255, 255, 255);
    $text = "ERROR!!" . $filter;
    imagestring($im, 5, 20, 20, $text, $textcolor);
}
imagejpeg($im);
imagedestroy($im);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo imagen dinámica</title>
    </head>
    <body>
        <div class="container">
            <div class="col">
                <img src="img/foto.jpg" id="foto" style="width:300px;">
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
        <script>
            window.onload = function() {
                let radios = document.getElementsByName("filtro");
                for (var i = 0; i < radios.length; i++) {
                    radios[i].onclick = cambiar;
                }
            }

            function cambiar() {
                document.getElementById("foto").src = "imagen.php?filter=" + this.id;
            }
        </script>
    </body>
</html>
