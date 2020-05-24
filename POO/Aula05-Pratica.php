<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <pre>
            <?php

            require_once "Conta.php";
            
            $p1 = new Conta();
            $p1 ->abrirConta("CC");
            $p1 ->setDono("Lucas");
            $p1 ->setNumConta(1111);
            $p1 ->depositar(300);
            $p1 ->sacar(350);
            $p1 ->fecharConta();
            print_r($p1);
            
            $p2 = new Conta();
            $p2 ->abrirConta("CP");
            $p2 ->setDono("Nancy");
            $p2 ->setNumConta(2222);
            $p2 ->depositar(500);
            $p2 ->sacar(650);
            $p2 ->fecharConta();
            print_r($p2);
            ?>
         </pre>
    </body>
</html>