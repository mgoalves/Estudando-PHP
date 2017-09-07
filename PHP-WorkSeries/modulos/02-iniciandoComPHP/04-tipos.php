<?php
/**
 * Created by PhpStorm.
 * User: Alves
 * Date: 02/05/2017
 * Time: 10:05
 */

header('Content-Type: text/html; carset=utf-8');


//String
$str = "Olá Mundo";
var_dump($str);
echo  "<hr/>";

//ARR = array
$arr = array(


);
$arr ['nome'] = "Marcello";
$arr ['idade'] = 20;
var_dump($arr);
echo  "<hr/>";
$arr [1] = "05";
var_dump($arr);
echo  "<hr/>";

$bool = false;
var_dump($bool);
echo  "<hr/>";