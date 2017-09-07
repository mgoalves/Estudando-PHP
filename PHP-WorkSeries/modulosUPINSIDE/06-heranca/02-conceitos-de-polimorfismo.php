<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Conceitos de Polimorfismo</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        
        $boleto = new Polimorfismo('Pro PHP', '334.90');
        $boleto->Pagar();
        
        var_dump($boleto);
        echo "<hr>";
        
        $deposito = new PolimorfismoDeposito('Pro PHP', '334.90');
        $deposito->Pagar();
        
        var_dump($deposito);
        echo "<hr>";
        
        
        $cartao = new PolimorfismoCartao('Pro PHP', '334.90');
        $cartao->Pagar();
        $cartao->Pagar(10);
        
        var_dump($cartao);
        
        ?>
    </body>
</html>
