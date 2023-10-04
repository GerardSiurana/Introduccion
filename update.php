<?php
require('databas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $stmt = $databas -> prepare("UPDATE entidad SET nombre = .nombre WHERE id = .id");
    $stmt -> bindParam('.id', $id);
    $stmt -> bindParam('.nombre', $nombre);

    if ($stmt -> exexute()) {
        echo 'Registro actualizado';
    } else {
        echo 'Registro no actualizado';
    }
} else {
    $id = $_GET['id'];
    $stmt = $databas -> prepare("SELECT * FROM entidad WHERE id= .id");
    $stmt -> bindParam('.id', $id);
    $stmt -> execute();
    $leer = $stmt -> fetch(PDO::FETCH_ASSOC);
}
?>