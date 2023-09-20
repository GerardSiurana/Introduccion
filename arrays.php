<br>
<?php
$nombres = array("Juan", "Maria", "Pedro", "Ana");
print_r($nombres);
?>
</br>

<br>
<?php
echo count($nombres);
?>
</br>

<br>
<?php
echo implode(" ", $nombres);
?>
</br>

<br>
<?php
asort($nombres);
print_r($nombres);
?>
</br>

<br>
<?php
$reversed = array_reverse($nombres);
print_r($reversed);
?>
</br>

<br>
<?php
$posicion = array_search("Ana" , $nombres);
echo "La posicion de Ana es: " , $posicion;
?>
</br>

<br>
<?php
$alumnos = array(
    array("id" => 1 , "nombre" => "Juan" , "edad" => 19),
    array("id" => 2 , "nombre" => "Maria" , "edad" => 20),
    array("id" => 3 , "nombre" => "Pedro" , "edad" => 21)
);
print_r($alumnos);
?>
</br>

<br>
<?php
echo "<table>";
echo "<tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";
foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" , $alumno['id'] , "</td>";
    echo "<td>" , $alumno['nombre'] , "</td>";
    echo "<td>" , $alumno['edad'] , "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</br>

<br>
<?php
$nombres_alumnos = array_column($alumnos, 'nombre');
print_r($nombres_alumnos);
?>
</br>

<br>
<?php
$numeros = array(1,2,3,4,5,6,7,8,9,10);
$suma = array_sum($numeros);
echo "La suma de todos los numeros es: " , $suma;
?>
</br>