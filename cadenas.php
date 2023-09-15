<br>
<?php

$nombre = $_GET['nombre'] ?? 'Gerard';
$nombre = trim($nombre, '/');

echo "Valor del parametro nombre: $nombre";


?>
</br>

<br>
<?php
$nombre = $_GET['nombre'] ?? 'Gerard';
$longitud = strlen($nombre);

echo "Longitud del nombre: $longitud";

?>
</br>

<br>
<?php

$nombre = $_GET['nombre'] ?? 'Gerard';
$mayusculas = strtoupper($nombre);

echo "Nombre en mayusculas: $mayusculas";


?>
</br>

<br>
<?php

$nombre = $_GET['nombre'] ?? 'Gerard';
$minusculas = strtolower($nombre);

echo "Nombre en minusculas: $minusculas";


?>
</br>

<br>
<?php
$nombre = $_GET['nombre'] ?? 'Gerard';
$prefijo = $_GET['prefijo'] ?? '';

if (!empty($prefijo)) {
    $comienzaConPrefijo = (strpos($nombre, $prefijo) === 0) ? 'Sí' : 'No';
} else {
    $comienzaConPrefijo = 'No se proporcionó un prefijo';
}

echo "¿El nombre comienza con el prefijo $prefijo?: $comienzaConPrefijo";
?>
</br>

<br>
<?php

$nombre = $_GET['nombre'] ?? 'Gerard';
$totalA = substr_count(strtolower($nombre), 'a');

echo "Numero de veces que aparece la letra a: $totalA";


?>
</br>

<br>
<?php

$nombre = $_GET['nombre'] ?? 'Gerard';
$posicionA = stripos($nombre, 'a');

if ($posicionA !== false) {
    echo "La posicion de la primera a es: $posicionA";
}else {
    echo "La letra a no se encontro en el nombre";
}
?>
</br>

<br>
<?php
$nombre = $_GET['nombre'] ?? 'Gerard';
$nombreModificado = str_ireplace('o', '0', $nombre);

echo "Nombre modificado: $nombreModificado";
?>
</br>

<br>
<?php
$url = 'http://username:password@hostname:9090/path?arg=value';
$parts = parse_url($url);

$protocolo = $parts['scheme'];
$nombreUsuario = $parts['user'];
$path = $parts['path'];
$queryString = $parts['query'];

echo "Protocolo utilizado: $protocolo<br>";
echo "Nombre de usuario: $nombreUsuario<br>";
echo "Path de la URL: $path<br>";
echo "Querystring de la URL: $queryString<br>";
?>
</br>