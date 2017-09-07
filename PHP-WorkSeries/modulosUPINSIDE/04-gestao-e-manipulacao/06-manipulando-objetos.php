<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');


//include './MinhaClassse.class.php';
require 'MinhaClasse.class.php';
require 'MinhaSegundaClasse.class.php';

$Robson = new MinhaSegundaClasse;
$Robson->setNome('Robson V. Leite');
$Robson->setEmpresa('UpInside');
$Robson->setRamo('Cursos Web');
$Robson->setIdade(29);

var_dump($Robson);
var_dump(get_class_methods('MinhaClasse'));
var_dump(get_class_vars('MinhaSegundaClasse'));
var_dump(get_class($Robson));
var_dump(get_parent_class($Robson));
var_dump(is_subclass_of($Robson, 'MinhaClasse'));
var_dump(method_exists($Robson, 'getNome'));

var_dump(call_user_func('strtoupper', $Robson->getNome()));
var_dump(call_user_func(array($Robson, 'getIdade')));

echo str_repeat("<br>", 40);
