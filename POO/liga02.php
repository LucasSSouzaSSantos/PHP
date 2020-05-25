<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO </title>
    </head>
    <body>
        <?php
            require_once "ligacao02.php"; // toda vez que for trabalhar com um arquivo externo
            $li = new ligacao02();
            $li -> nome = "Lucas";
            $li ->carga = 20;
            $li ->numero = true;
            
            $li ->discar();
            $li ->ligar();
            
            $li ->falar("Alô! É Maria?");
        ?>
    </body>    
</html>
