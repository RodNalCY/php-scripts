<?php

$array1 = [0, 1, 2, 5, 6, 7, 8, 10];
$array2 = [0, 1, 2];
$array3 = [5, 6, 7, 8, 10];

// Crear un array con todos los números del 0 al 10
$maxNumber = 10;
$completeArray = range(0, $maxNumber);

// Encontrar los números faltantes usando array_diff
$missingNumbers = array_diff($completeArray, $array3);

echo "<br>Números faltantes:<br>";
print_r(array_values($missingNumbers));
