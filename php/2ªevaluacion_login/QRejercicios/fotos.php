<?php

include("QR/php-qrcode-master/lib/full/qrlib.php");
$id=isset($_GET['id']);
$name=isset($_GET['nombre']);

function fotoQR($id, $name)
{

    QRcode::png("$id,$name");
}
