<?php

$numero1 = isset($_GET['numero1']) ? $_GET['numero1'] : 0;
$numero2 = isset($_GET['numero2']) ? $_GET['numero2'] : 0;


$resultado = $numero1 * $numero2;


echo "El resultado de multiplicar $numero1 por $numero2 es: $resultado";
?>
