<?php
// index.php
// Se puede cambiar fácilmente la URL de destino aquí
$url_destino = 'https://www.vidrioandino.com'; // Enlace a donde redirigir (puede cambiarse dinámicamente)

// Realiza la redirección
header('Location: ' . $url_destino);
exit;
?>
