<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$Bolsa = "Marrom";

if (!empty($Bolsa)):
    if ($Bolsa == "Vermelha"):
        echo "Amor, comprei a bolsa que você queria!";
    elseif ($Bolsa == "Preta"):
        echo "Amor, comprei a preta pois não tinha a vermelha!";
    else:
        echo "Alô amor, não tem as cores. Posso levar outra?<br>";
        $Amor = true;
        if($Amor):
            echo "Pode sim amor. Traga qualquer uma!";
        else:
            echo "O Sofa te espera!";
        endif;
    endif;
else:
    echo "Amor. Não tem mais a bolsa :/";
endif;