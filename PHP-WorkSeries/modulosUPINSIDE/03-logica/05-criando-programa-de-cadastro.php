<?php

//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Função valida e-mail
function EmailValidade($Email) {
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

$Nome = "Robson V. Leite";
$Email = "feedbacks@upisnide.com.br";

if (empty($Nome) || empty($Email)):
    echo "Ops: Informeu Seu Nome e E-mail!";
elseif (!EmailValidade($Email)):
    echo "Ops: Informe um e-mail válido!";
else:
    $Users = [
        'cursos@upisnide.com.br',
        'maria@upinside.com.br'
    ];
    if (in_array($Email, $Users)):
        echo "Ops. Você já é cadastrado. Quer logar? <a href='#'>Sim</a>";
    else:
        echo "Cadastro com sucesso!";
    endif;
endif;
