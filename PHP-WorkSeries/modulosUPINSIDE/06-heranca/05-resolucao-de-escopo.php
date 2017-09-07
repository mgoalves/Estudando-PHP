<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Operador de resolução de escopo</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');


        $produto = new ResolucaoDeEscopo('Livro de PHP', 59.90);
        $digital = new ResolucaoDeEscopoDigital('Livro de PHP', 39.90);
        
        $produto->Vender();
        $produto->Vender();
        $produto->Vender();
        
        $digital->Vender();
        $digital->Vender();

//        $produto->Relatorio();
        ResolucaoDeEscopo::Relatorio();
        echo ResolucaoDeEscopoDigital::$Digital . " Livros digitais <br>";
        echo ResolucaoDeEscopo::$Vendas - ResolucaoDeEscopoDigital::$Digital . ' Livros Impressos';

        var_dump($produto, $digital);
        ?>
    </body>
</html>
