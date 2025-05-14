<?php
    echo "Calcular IMC <br>";
    $pesoKG   = 80;
    $alturaMT = 1.7;
    $potencia = 2;

    $IMC = round($pesoKG/pow($alturaMT, $potencia), 1);
    
    echo "IMC : ". $IMC; 
?>