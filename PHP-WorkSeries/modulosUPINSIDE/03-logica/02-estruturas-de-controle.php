<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');


//SE, SENÃO
$teste = true;
if ($teste) {
    echo "True";
} else {
    echo "False";
}
echo "<hr>";

//SE, SENÃO SE, SENÃO
$teste = false;
$resut = 1234234;
if ($teste && !empty($resut)):
    echo "Teste positico: {$resut}";
elseif ($teste && empty($resut)):
    echo "Teste positico mas sem resultados!";
else:
    echo "Teste negativo!";
endif;
echo "<hr>";

//BATERIA
$mes = 2;
switch ($mes):
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    default :
        echo "Teste inválido!";
        break;
endswitch;
echo "<hr>";

$mesMais = 7;
switch ($mesMais):
    case ($mesMais <= 6):
        echo "Ainda estamos no primeiro semestre";
        break;
    default :
        echo "passamos!";
        break;
endswitch;

















