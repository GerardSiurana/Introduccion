<?php
$edades = array("Juan"=>"31", "Maria"=>"41", "Andrés"=>"39", "Berta"=>"40");

ksort($edades);
echo "Ordenado por Nombre, ascendente:/n";
print_r($edades);

asort($edades);
echo "Ordenado por Edad, ascendente:/n";
print_r($edades);

krsort($edades);
echo "Ordenado por Nombre, descendente:/n";
print_r($edades);

arsort($edades);
echo "Ordenado por Edad, descendente:/n";
print_r($edades);
?>