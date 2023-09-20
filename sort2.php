<?php
$temperaturas = "25, 28, 22, 30, 27, 26, 29, 31, 20, 24, 23, 32, 21, 33, 19, 18, 34, 17, 35, 16, 15";
$tempeaturaArray = explode(",", $temperaturas);

$totalTemperaturas = count($tempeaturaArray);
$sumTemperaturas = array_sum($tempeaturaArray);
$mediaTemperaturas = $sumTemperaturas / $totalTemperaturas;

sort($tempeaturaArray);

echo "5 temperaturas minimas:/n";
for ($i = 0; $i < 5; $i++) {
    echo $tempeaturaArray[$i] . " ";
}
rsort($tempeaturaArray);

echo "5 temperaturas maximas:/n";
for ($i = 0; $i < 5; $i++) {
    echo $tempeaturaArray[$i] . " ";
}

?> 