<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (phpversion() >= 5.4):
            echo phpversion() . ' Olá Mundo, podemos programar!';
        else:
            echo phpversion() . ' Olá Mundo, preciso atualizar o PHP!';
        endif;
        
        echo "<hr>";
        
        //echo phpinfo();
        
        //echo "<pre>";
        //print_r(ini_get_all());
        //echo "</pre>";
        
        echo ini_get('date.timezone') ."<br>";
        echo date('d/m/Y H:i:s');
        
        echo "<hr>";
        
        date_default_timezone_set("UTC");
        echo date_default_timezone_get().'<br>';
        echo date('d/m/Y H:i:s');
        ?>
    </body>
</html>
