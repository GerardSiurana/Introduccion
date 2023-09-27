<?php

$productos = [
    1 => 'Producto 1',
    2 => 'Producto 2',
    3 => 'Producto 3'
];

    $id = $_GET['id'];

    if (array_key_exists($id, $productos)) {
        echo "Mostrando producto: " . $productos[$id];
    } else {
        http_response_code(404);
        echo "El producto no existe";
    }
?>