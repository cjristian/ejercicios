<?php
const IMG_NAME = "./img/foto.jpg";

$filter = (!empty($_GET["filter"])?$_GET["filter"]:"");
$im = @imagecreatefromjpeg(IMG_NAME);
header('Content-Type: image/jpeg');

$error = false;
switch ($filter) {
	case "": 
	case "original": break;
	case "grises": $error = !($im && imagefilter($im, IMG_FILTER_GRAYSCALE)); break;
	case "azules": $error = !($im && imagefilter($im, IMG_FILTER_COLORIZE,0, 255, 255)); break;
	case "invertida": $error = !($im && imageflip($im, IMG_FLIP_VERTICAL)); break;
	case "pixelada": $error = !($im && imagefilter($im, IMG_FILTER_PIXELATE, 10));break;
	default: $error = true; 
}

if ($error) {
	$im = imagecreatetruecolor(600, 600);
	$red = imagecolorallocate($im, 200, 0, 0);
	imagefill($im, 500, 100, $red);
	$textcolor = imagecolorallocate($im, 255, 255, 255);
	$text = "ERROR!!" .$filter;
	imagestring($im, 5, 20, 20, $text, $textcolor);
}
imagejpeg($im);
imagedestroy($im);