<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Variáveis Normais
$meuNome = "Robson V. Leite";
$minha_empresa = "UpInside Treinamentos";

$idadeDoCliente = 29;
$idade_do_cliente = 29;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDoCliente} anos!<hr>";

//VAR de referência!
$var = "empresa";
$$var = "UpInside";
echo "Minha {$var} é a {$empresa}<hr>";

//Reescrita
$Nome = "Marcos";
echo "{$Nome}<br>";

$Nome = "Robson";

//Concatenação
$Nome .= " Leite";
echo "{$Nome}<br>";

$Nome = $meuNome;
echo "{$Nome}<br>";



