<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if(phpversion() >= 5.4):
                echo "Ol� Mundo";
            else: 
                
            endif;
            
            echo "<hr>";
            
            echo date_default_timezone_get();
        
        ?>
    </body>
</html>
