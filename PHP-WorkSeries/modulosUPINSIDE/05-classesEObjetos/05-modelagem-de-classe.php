<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Modelagem de Classe</title>
    </head>
    <body>
        <?php
        require('./class/ModelagemDeClasse.class.php');
        
        $robson = new ModelagemDeClasse('Robson', 27, 'Programador', 1200);
        $robson->setProfissao('Web Master');
        
        $robson->Trabalhar('um portal', 12000);        
        
        var_dump($robson);
        
        ?>
    </body>
</html>