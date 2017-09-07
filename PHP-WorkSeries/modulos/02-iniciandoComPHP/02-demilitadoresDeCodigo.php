<?php

    header('Content-Type: text/html; carset=utf-8');

    //Comentario

    /*
     * Recursivo
     *
     */


$ola = "Olá Mundo";

echo $ola;
echo "<br/>";
echo '$ola';
echo "<br/>";
echo "$ola";
echo "<br/>";
echo "{$ola}s";
echo "<br/>";
echo "<hr/>";


?>

<article>
    <h1><?= $ola?></h1>
    <h2><?= "{$ola}, prazer."?></h2>

</article>
