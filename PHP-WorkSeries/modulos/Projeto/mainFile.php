<?php

//Marcello Alves - SI 201506640
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

require './aluno.class.php';

$aluno01 = new aluno("Sara", 36, "CC", "123");



var_dump($aluno01);

$nome = "Marcello";

echo "Meu nome é {$nome}";

?>
