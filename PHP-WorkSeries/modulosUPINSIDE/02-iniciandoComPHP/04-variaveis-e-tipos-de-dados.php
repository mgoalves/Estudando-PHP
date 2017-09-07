<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//STR = string
$str = "Olá Mundo!";
var_dump($str);

//ARR = array
$arr = array();
$arr['nome'] = "Robson";
$arr['idade'] = 29;
var_dump($arr);

//BOOL = boleano
$bool = false;
$idade = 26;
$velho = ($idade > 27);

var_dump($bool);
//if($bool):
//    echo "TRUE";
//else:
//    echo "FALSE";
//endif;

$opa = null;
$int = 0;
$str = "";
$arr = array();

//INT = inteiro
$int = 29;
var_dump($int);

//FLT = flutuante
$flt = 0.8;
var_dump($flt);


//NUMÉRICAS
$numInt = 1276523;
var_dump($numInt);


$numFlt = 0.8;
var_dump($numFlt);

$numNegativo = -340;
var_dump($numNegativo);

$numCalc = 2*2.86;
var_dump($numCalc);

echo "<hr>";

//OBJ = objeto
$obj = new stdClass();
$obj->Nome = "Robson";
$obj->Idade = 29;
var_dump($obj);