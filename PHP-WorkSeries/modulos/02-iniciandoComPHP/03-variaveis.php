<?php

$nome = "Marcello Alves";
$idade = 19;

echo $nome, "<br>";
echo $idade, "<br>";


//Concatenacao
$nome .= $idade;
echo $nome;
echo "<br/>";

var_dump($nome);
echo "<br/>";

//variaveis de referencia
$var = "empresa";
$$var = "Upinside";

echo "{$var} é a {$empresa}";
echo "<br/>";

