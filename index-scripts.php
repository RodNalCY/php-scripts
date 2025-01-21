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

function potencia($a, $b)
{
    return $a ** $b;
}

// Ejemplo de uso
$num1 = 5;
$num2 = 2;

$resultado1 = [
    'valor-a'     => $num1,
    'valor-b'     => $num2,
    'suma'        => sumar($num1, $num2),
    'resta'       => restar($num1, $num2),
    'multiplicar' => multiplicar($num1, $num2),
    'dividir'     => dividir($num1, $num2),
    'modulo'      => modulo($num1, $num2),
    'potencia'    => potencia($num1, $num2),
];

// echo json_encode($resultado1, JSON_PRETTY_PRINT);
// echo "La suma de $num1 y $num2 es: $resultado";

// Funcion para obtener los numero primos
// $primos   = [];
// $noprimos = [];

function primos($a, $b)
{
    $numeros  = range($a, $b);
    foreach ($numeros as $primo) {
        if ($primo % 2 != 0) {
            $primos[] = $primo;
        } else {
            $noprimos[] = $primo;
        }
    }

    return $primos;
}

$resultado2 = [
    'primos'   => primos(1, 100),
];

echo json_encode($resultado2, JSON_PRETTY_PRINT);
