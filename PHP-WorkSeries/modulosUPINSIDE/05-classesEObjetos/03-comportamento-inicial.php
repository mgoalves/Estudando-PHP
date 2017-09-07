<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Comportamento Inicial</title>
    </head>
    <body>
        <?php
        require('./class/ComportamentoInicial.class.php');
        
//        $robson = new ComportamentoInicial;
//        
//        $robson->Nome = 'Robson';
//        $robson->Salario = 'banana';
        
        $robson = new ComportamentoInicial('Robson', 27, 'Programador', 3600);
        $marcos = new ComportamentoInicial('Marcos', 32, 'Programador', 5600);
        $pedro = new ComportamentoInicial('pedro', 22, 'Programador', 1800);
        
        $robson->ver();
        
        ?>
    </body>
</html>
