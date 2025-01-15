<?php
header('Content-type: application/json; charset=utf-8');

function sumar($a, $b)
{
    return $a + $b;
}

function restar($a, $b)
{
    return $a - $b;
}

function multiplicar($a, $b)
{
    return $a * $b;
}

function dividir($a, $b)
{
    return $a / $b;
}

function modulo($a, $b)
{
    return $a % $b;
}

// Ejemplo de uso
$num1 = 5;
$num2 = 6;

$resultado = [
    'valor-a' => $num1,
    'valor-b' => $num2,
    'suma' => sumar($num1, $num2),
    'resta' => restar($num1, $num2),
    'multiplicar' => multiplicar($num1, $num2),
    'dividir' => dividir($num1, $num2),
    'modulo' => modulo($num1, $num2),
];

echo json_encode($resultado, JSON_PRETTY_PRINT);
// echo "La suma de $num1 y $num2 es: $resultado";
