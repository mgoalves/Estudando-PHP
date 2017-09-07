<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$nome = "Marcelo Silva <br>";
echo strtoupper($nome);
echo strtolower($nome);
echo ucwords($nome);
echo ucfirst(strtolower($nome));
echo "<hr>";

//TRATAR UMA IMAGEM
$img = "NOME DA IMAGEM.jpg";

$imagem = strtolower(str_replace(' ', '-', $img));
echo $imagem;
echo "<hr>";

for($i = 1; $i <= 10; $i++):
    echo str_pad($i, 2, 0, STR_PAD_LEFT). "<br>";
endfor;
echo "<hr>";

$escreva = "DESCULPA, ";
echo str_repeat($escreva, 100);
echo "<hr>";

//O PRIMEIRO S
$NovoNome = "Robson Santos Silva";
echo substr($NovoNome, 0, 6);
echo "<br>";

echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strpos($NovoNome, ' '));
echo "<br>";

echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strrpos($NovoNome, ' '));


$ext = substr($img, strrpos($img, '.') + 1);
echo "<hr>{$ext}";



echo str_repeat("<br>", 20);