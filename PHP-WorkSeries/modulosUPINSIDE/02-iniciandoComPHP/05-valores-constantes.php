<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//COMPLIAÇÃO:
        const DEV_NAME = "Robson V. Leite";
        const DEV_AGE = 29;

echo "Meu nome é " . DEV_NAME . ". Eu tenho " . DEV_AGE;
echo "<hr>";

define("DB_NAME", "_wsphp3");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

@$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db):
    echo "Conectamos com o db: " . DB_NAME;
else:
    echo "Erro ao conectar: " . mysqli_connect_error();
endif;
