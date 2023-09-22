<?php
function partlist($array) {
    $resultado = [];
    
    for ($i = 1; $i < count($array); $i++) {
      $part1 = implode(" ", array_slice($array, 0, $i));
      $part2 = implode(" ", array_slice($array, $i));
      $resultado[] = [$part1, $part2];
    }
    
    return $resultado;
  }
  
  $array = ["Seguro", "que", "apruebo", "esta", "asignatura"];
  $resultado = partlist($array);
  print_r($resultado);
?>