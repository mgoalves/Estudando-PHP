<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$Arr = array('PHP', 'HTML', 'CSS');
$Arr[] = 'JS';
var_dump($Arr);

$ArrB = ['PHP', 'HTML', 'CSS'];
$ArrB[] = 'JS';
var_dump($ArrB);

foreach ($ArrB as $Lang):
    echo "{$Lang}<br>";
endforeach;
echo "<hr>";

//ASSOCIATIVO
$ArrC = [
    "cargo" => "Programador",
    "salario" => 2200
];
$ArrC['empresa'] = "UpInside <?=";
$ArrC['cargo'] = "Webmaster";
$ArrC['salario'] += 5000;
$ArrC['cargo'] .= "/Programador";

$ArrC = array_map('strip_tags', $ArrC);
$ArrC = array_map('trim', $ArrC);
var_dump($ArrC);

//echo "Eu sou {$ArrC['cargo']} na {$ArrC['empresa']}!";
extract($ArrC);
echo "Eu sou {$cargo} na {$empresa} e ganho R$ " . number_format($salario, 2, ',', '.') . " por mês!";
echo "<hr>";

//Multidimensional
$Colaboradores = [];
$Colaboradores[] = ["nome" => "Robson V. Leite", "salario" => 7200, "cargo" => "Webmaster"];
$Colaboradores[] = ["nome" => "Pedro V. Leite", "salario" => 1800, "cargo" => "Aprendiz"];
$Colaboradores[] = ["nome" => "Lucas V. Leite", "salario" => 1800, "cargo" => "Aprendiz"];

foreach ($Colaboradores as $Cargo):
    extract($Cargo);
    echo "{$nome} e {$cargo} e recebe " . number_format($salario, 2, ',', '.') . " por mês!<br>";
endforeach;



var_dump($Colaboradores);















echo str_repeat("<br>", 40);
