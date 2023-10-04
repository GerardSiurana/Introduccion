<?php
require('databas');

$stmt = $databas -> query("SELECT * FROM entidad");

echo 'Registros';
while ($leer = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    echo $leer['nombre'] . $leer['id'] . $leer['id'];
}
?>