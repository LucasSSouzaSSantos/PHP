<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO </title>
    </head>
    <body>
        <pre>
        <?php
        require_once "Caneta04.php";
        $c1 = new Caneta04("Nic", 0.5);
        printf("Eu tenho uma caneta do modelo {$c1->getModelo()} de ponta {$c1->getPonta()}.");
            
        ?>
        </pre>
    </body>    
</html>
