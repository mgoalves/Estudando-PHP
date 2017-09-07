<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Réplica e Clonagem</title>
    </head>
    <body>
        <?php
        require('./class/ReplicaClonagem.class.php');
        
        $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", 'ODER BY data DESC');
        $readA->Ler();     
        $readA->setTermos("categoria = 'internet'");
        
        
        $readB = clone($readA);
        $readB->setTermos("categoria = 'redes socias'");     
        
        
        $readC = clone($readA);
        $readC->setTabela('comentarios');
        $readC->setTermos("post = 25");
        
        
        $readA->Ler();
        $readB->Ler();
        $readC->Ler();
        
        
        
        var_dump($readA, $readB, $readC);
        ?>
    </body>
</html>
