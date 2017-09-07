<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//WHILE: Enquanto acontecer;
$i = 1;
while ($i <= 10):
    echo "{$i} X 8 = " . $i * 8 . "<br>";
    $i ++;
endwhile;
echo "<hr>";

//FOR = Execute X Vezes
for($e = 1; $e <= 10; $e++):
    echo "{$e} X 10 = " . $e * 10 . "<br>";
endfor;
echo "<hr>";

//FOREACH: Arrays
$Arr = ['WS PHP', 'WS HTML5', 'WS RWD', 'WS PP'];
foreach ($Arr as $Cursos):
    echo "Meu treinamento tem o curso {$Cursos}<br>";
endforeach;
echo "<hr>";

$ArrName = ['nome' => 'Robson', "idade" => 28];
foreach ($ArrName as $Key => $Value):
    echo "{$Key} = {$Value}<br>";
endforeach;









