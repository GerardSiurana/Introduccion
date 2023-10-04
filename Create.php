<?php
require('databas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    
    $stmt = $databas -> prepare("INSERT INTO entidad (nombre) VALUES (.nombre)");
    $stmt -> bind_param('.nombre', $nombre);

    if ($stmt -> exexute()) {
        echo 'Registro creado';
    } else {
        echo 'Registro no creado';
    }
}
?>