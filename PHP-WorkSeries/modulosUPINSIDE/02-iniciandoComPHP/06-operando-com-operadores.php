<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//ATRIBUIÇÃO
$var = 10;
$var += 5; //Soma
$var -= 10; //Subtrai
$var *= 10; //Multiplica
$var /= 5;

var_dump($var);

//ARITIMÉTICOS
$a = 10;
$b = 5;
$c = $a + $b;
$c = $a + $b * $b;
$c = ($a + $b) / $b;

var_dump($c);

//RELACIONAIS
$a = 5;
$b = "5";

if($a !== $b):
    echo "TRUE";
endif;

if($a == $b): endif; //Se igual
if($a === $b): endif; //Se identico
if($a != $b): endif; //Se diferente
if($a !== $b): endif; //Se não identico
if($a > $b): endif; //Se maior
if($a >= $b): endif; //Se maior ou igual
if($a < $b): endif; //Se menor
if($a <= $b): endif; //Se menor ou igual

//EXISTENCIA
if($a): endif; //Se existe
if(!$a): endif; //Se não existe
if(isset($a)): endif; //Se existe
if(!isset($a)): endif; //Se não existe
if(empty($a)): endif; //Não existe ou estiver vázia
if(!empty($a)): endif; //Se existe e tem valor

echo "<hr>";


//LÓGICOS
$l = "";
$s = "UpInside";

if($l && $s):
    echo "Existe as duas";
endif;

if($l || $s):
    echo "Existe as duas";
endif;

echo "<hr>";
if(empty($l) && $s == "UpInside" || (1 == 10 && empty($l))):
    echo "true";
else:
    echo "false";
endif;