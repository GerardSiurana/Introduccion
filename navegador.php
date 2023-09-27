<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isFirefox = strpos($userAgent, 'Firefox') !== false;

if ($isFirefox) {
    echo "<h1>Bienvenido a la página web</h1>";
    echo "<p>Este es el contenido de la página web para los usuarios de Firefox.</p>";
} else {
    echo "<h1>Acceso denegado</h1>";
    echo "<p>Lo siento, esta página solo es compatible con el navegador Firefox.</p>";
}



?>