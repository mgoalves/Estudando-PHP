<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$Pessoa = [];
$Pessoa['nome'] = "Robson V. Leite <script><?=";
$Pessoa = array_pad($Pessoa, 5, null);

$Pessoa = array_filter($Pessoa);
$Pessoa = array_map('strip_tags', $Pessoa);
$Pessoa = array_map('trim', $Pessoa);

array_push($Pessoa, 29);
array_pop($Pessoa);
array_unshift($Pessoa, 29);
array_shift($Pessoa);

$Pessoa['idade'] = 28;
$Pessoa['job'] = "Webmaster";
$Pessoa = array_reverse($Pessoa);

$Empresa['empresa'] = "UpInside Treinamentos";
$Empresa['atuacao'] = "Treinamentos Web";

$Casa['cidade'] = "Floripa";

$Pessoa = array_merge($Pessoa, $Empresa, $Casa);
var_dump($Pessoa);

var_dump(array_keys($Pessoa));
var_dump(array_values($Pessoa));
var_dump(array_slice($Pessoa, 2));
var_dump("O array tem " . count($Pessoa) . " índices!");

if(in_array("UpInside", $Pessoa)):
    echo "Existe!";
endif;

asort($Pessoa);
arsort($Pessoa);
ksort($Pessoa);
krsort($Pessoa);
sort($Pessoa);
rsort($Pessoa);

var_dump($Pessoa);


$Nomes = "Robson, Pedro, Lucas";
$Nomes = explode(', ', $Nomes);
$Nomes = implode($Nomes, ", ");



var_dump($Nomes);













echo str_repeat("<br>", 40);
