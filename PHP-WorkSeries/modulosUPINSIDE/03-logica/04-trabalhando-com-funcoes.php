<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

function Tabuada() {
    echo "<b>Tabuada do 5:</b><br>";
    for ($x = 1; $x <= 10; $x++):
        echo "5 x {$x} = " . 5 * $x . "<br>";
    endfor;
    echo "<hr>";
}

echo Tabuada();

function minhaTabuada($Numero) {
    echo "<b>Tabuada do {$Numero}:</b><br>";
    for ($x = 1; $x <= 10; $x++):
        echo "{$Numero} x {$x} = " . $Numero * $x . "<br>";
    endfor;
    echo "<hr>";
}

echo minhaTabuada(4);
echo minhaTabuada(5);
echo minhaTabuada(7);
