<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Comentário de código

/*
 * Comentário Recursivo
 */

/*
  Comentário de várias linhas
 */

$ola = "Olá Mundo";
$nome = "Robson";

echo $ola;
echo "<hr>";

echo '$ola';
echo "<br>";
echo "$ola";
echo "<br>";
echo $ola;
echo "<br>";
echo "{$ola}s";
echo "<br>";
echo "{$ola}, meu nome é {$nome}!";
echo "<hr>";

print("{$ola}<br>");

$Arr = array(
    "ola" => "Olá Mundo!",
    "nome" => "Robson"
);

print_r($Arr);

$idade = 29;
echo $idade;

var_dump($idade);
var_dump($Arr);
var_dump($ola);
echo "<hr>";
?>

<article>
    <h1><?= $ola; ?></h1>
    <p>Meu nome é <?php echo $nome; ?></p>
</article>