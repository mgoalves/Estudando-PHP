<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Trabalho com Interfaces</title>
    </head>
    <body>
        <?php
        require('./interface/IAluno.php');
        require('./inc/Config.inc.php');
        
        $aluno = new TrabalhoComInterfaces('Robson', 'Pro PHP');
        $aluno->Formar();
        $aluno->Matricular('WS PHP');
        $aluno->Formar();
        
        var_dump($aluno);
        
        ?>
    </body>
</html>
