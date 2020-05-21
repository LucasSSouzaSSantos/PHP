<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO </title>
    </head>
    <body>
        <?php
            require_once "Caneta02.php";
            $c1 = new Caneta02(); // maneira de instânciar um classe ou criar um objeto
            $c1 -> cor = "Azul";  // maneira de como passar os valores para os atributos
            $c1 -> ponta = 0.5;
            $c1 -> tampada = false;
            $c1 -> carga = 100;
            
            $c1 ->rabiscar();
            
            print_r($c1);  // essa linha mostra o estado do objeto
            echo '<br/>';
            $c2 = new Caneta02();
            $c2 ->cor = "Verde";
            $c2 ->carga = 50;
            $c2 ->tampada = false;
            $c2 ->ponta = 0.7;
            print_r($c2);
        ?>
    </body>    
</html>
