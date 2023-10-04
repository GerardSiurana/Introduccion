<?php
require('databas.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $stmt = $databas -> prepare("DELETE FROM entidad WHERE id= .id");
    $stmt -> bindParam('.id', $id);

    if ($stmt -> exexute()) {
        echo 'Registro eliminado';
    } else {
        echo 'Error al eliminar el registro';
    }
}


?>