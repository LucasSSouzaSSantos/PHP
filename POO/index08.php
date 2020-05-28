<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once "Lutador08.php";
                require_once "Luta08.php";
                $L = array();
                $L[0] = new Lutador08("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                $L[1] = new Lutador08("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                $L[2] = new Lutador08("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
                $L[3] = new Lutador08("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
                $L[4] = new Lutador08("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
                $L[5] = new Lutador08("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
                
                $UEC01 = new Luta08();
                $UEC01->marcarLuta($L[1], $L[1]);
                $UEC01->lutar();
                
                $UEC02 = new Luta08();
                $UEC02->marcarLuta($L[2], $L[3]);
                $UEC02->lutar();
                
                $UEC03 = new Luta08();
                $UEC03->marcarLuta($L[4], $L[1]);
                $UEC03->lutar();
            ?>
        </pre>
    </body>
</html>
