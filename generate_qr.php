<?php
// Incluir la librería PHP QR Code
include('phpqrcode/qrlib.php');

// URL de tu archivo PHP que genera la redirección (debe apuntar a tu archivo index.php)
$url = 'http://tu-servidor.com/index.php'; // Reemplaza con la URL real de tu archivo index.php

// Generar el código QR y mostrarlo
QRcode::png($url); // Esto generará el QR de la URL del archivo index.php
?>
