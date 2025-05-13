<?php

eval('$a = 5; echo $a;'); // Imprime: 5

echo "<br>";
$code = '2 + 3';
$result = eval('return ' . $code . ';');
echo $result; // Imprime: 5


$userInput = 'system("rm -rf /");'; // ⚠️ puede dañar tu servidor
eval($userInput); // ❌ NUNCA hagas esto