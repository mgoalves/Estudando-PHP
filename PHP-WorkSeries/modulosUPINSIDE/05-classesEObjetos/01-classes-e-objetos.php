<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Classes e Objetos</title>
    </head>
    <body>
        <?php
        require('./class/ClassesObjetos.class.php');
        
        $teste = new ClassesObjetos();
        $teste->getClass('De introdução', 'mostrar uma classe');
        $teste->verClass();
        
        $teste->Classe = 'Classe 2';
        $teste->Funcao = 'Ver os atributos';
        $teste->verClass();
        ?>
    </body>
</html>
