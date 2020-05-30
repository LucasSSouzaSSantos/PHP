<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Mamifero13.php';
            $c = new Mamifero13();
            $c ->emitirSom();
            
            require_once 'Lobo13.php';
            $L = new Lobo13();
            $L ->emitirSom();
        ?>
    </body>
</html>
