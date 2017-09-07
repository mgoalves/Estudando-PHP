<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Conceitos de Abstração</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

//        $conta = new Abstracao('Robson V. Leite', 500);
//        $contaDois = new Abstracao('Marcos', 300);
//        
//        $conta->Despositar(1000);
//        $conta->Sacar(500);
//        $conta->Tranferir(500, $conta);
//        $conta->Tranferir(500, $contaDois);
//        
//        var_dump($conta, $contaDois);
//        
        $cc = new AbstracaoCC('Robson', 0, 1000);
        $cp = new AbstracaCP('Robson', 0);

        $cc->Despositar(1000);
        $cc->Sacar(500);
        $cc->Tranferir(500, $cp);

        $cp->Despositar(1000);
        $cp->Sacar(500);
        $cp->Tranferir(500, $cc);


        $cc->VerSaldo();
        $cp->VerSaldo();
        var_dump($cc, $cp);
        ?>
    </body>
</html>
