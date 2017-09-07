<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Atributos e Métodos</title>
    </head>
    <body>
        <?php
        require('./class/AtributosMetodos.class.php');
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Robson', 27, 'Web Master');
        $usuario = $pessoa->getUsuario();
        echo $usuario;
        
        echo "<hr>";
        
        $pessoa->Idade = 'banana';
        
        $pessoa->setUsuario('Marcelo', 27, 'web master');
        $pessoa->setIdade(28);
        $pessoa->Envelhecer();
        $pessoa->Envelhecer();
        
        $pessoa->getClasse();
        

        ?>
    </body>
</html>
