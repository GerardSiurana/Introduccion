<?php

function calcularlongitudstring($string)
{
    return strlen($string);
}

$strings = array("Hola", "Mundo", "Lorem ipsum", "PHP");

$longitudes = array_map("calcularlongitudstring", $strings);

$max_longitud = max($longitudes);
$min_longitud = min($longitudes);

echo "Maximum Length: " . $max_longitud . "\n";
echo "Minimum Length: " . $min_longitud . "\n";
?>