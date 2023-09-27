<?php

$productos = array(
    array('1', 'Producto 1'),
    array('Producto 2', 'Descripcion 2', 2),
    array('Producto 3', 'Descripcion 3', 3)
);

$nombreArchivo = 'productos.csv';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');

foreach ($productos as $id => $descripcion ) {
    echo "Mostrando producto: " . $productos[$id];
}



?>