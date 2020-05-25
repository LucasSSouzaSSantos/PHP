<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO </title>
    </head>
    <body>
        <?php
        require_once "Caneta03.php";
        $c1 = new Caneta03();
        $c1 ->modelo = "Bic Cristal";
        
        print_r($c1);
            
        ?>
    </body>    
</html>
