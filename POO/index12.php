<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <pre>
        <?php
            echo "<br>----------------------------------------";
            require_once 'Mamifero12.php';
            $m = new Mamifero12();
            $m ->setPeso(85.7);
            $m ->setIdade(2);
            $m ->setMembros(4);
            $m ->setCorPelo("Amarelho");
            $m ->locomover();
            $m ->alimentar();
            $m ->emitirSom();
            print_r($m);
            
            echo "----------------------------------------";
            require_once 'Canguru12.php';
            $k = new Canguru12();
            $k ->setPeso(85.7);
            $k ->setIdade(2);
            $k ->setMembros(2);
            $k ->setCorPelo("Amarelho");
            $k ->usarBolsa();
            $k ->locomover();
            $k ->alimentar();
            $k ->emitirSom();
            print_r($k);
            
            echo "----------------------------------------";
            require_once 'Cachorro12.php';
            $ca = new Cachorro12();
            $ca ->setPeso(85.7);
            $ca ->setIdade(2);
            $ca ->setMembros(4);
            $ca ->setCorPelo("Preto e Branco");
            $ca ->locomover();
            $ca ->enterrarOsso();
            $ca ->alimentar();
            $ca ->emitirSom();
            print_r($ca);
            
            echo "----------------------------------------";
            require_once 'Reptil12.php';
            $r = new Reptil12();
            $r ->setPeso(200);
            $r ->setIdade(200);
            $r ->setMembros(2);
            $r ->setCorEscama("Verde");
            $r ->locomover();
            $r ->alimentar();
            $r ->emitirSom();
            print_r($r);
            
            echo "----------------------------------------";
            require_once 'Cobra12.php';
            $co = new Cobra12();
            $co ->setPeso(20);
            $co ->setIdade(200);
            $co ->setMembros(0);
            $co ->setCorEscama("Cinza");
            $co ->locomover();
            $co ->alimentar();
            $co ->emitirSom();
            print_r($co);
            
            echo "----------------------------------------";
            require_once 'Tartaruga12.php';
            $t = new Tartaruga12();
            $t ->setPeso(200);
            $t ->setIdade(200);
            $t ->setMembros(4);
            $t ->setCorEscama("Verde");
            $t ->locomover();
            $t ->alimentar();
            $t ->emitirSom();
            print_r($t);
            
            echo "----------------------------------------";
            require_once 'Peixe12.php';
            $p = new Peixe12();
            $p ->setPeso(200);
            $p ->setIdade(200);
            $p ->setMembros(1);
            $p ->setCorEscama("Cinza");
            $p ->soltarBolha();
            $p ->locomover();
            $p ->alimentar();
            $p ->emitirSom();
            print_r($p);
            
            echo "----------------------------------------";
            require_once 'PeixeDourado12.php';
            $pd = new PeixeDourado12();
            $pd ->setPeso(20);
            $pd ->setIdade(2);
            $pd ->setMembros(1);
            $pd ->setCorEscama("Cinza");
            $pd ->soltarBolha();
            $pd ->locomover();
            $pd ->alimentar();
            $pd ->emitirSom();
            print_r($pd);
            
            echo "----------------------------------------";
            require_once 'Ave12.php';
            $a = new Ave12();
            $a ->setPeso(200);
            $a ->setIdade(200);
            $a ->setMembros(2);
            $a ->setCorPena("Verde");
            $a ->fazerNinho();
            $a ->locomover();
            $a ->alimentar();
            $a ->emitirSom();
            print_r($a);
            
            echo "----------------------------------------";
            require_once 'Arara12.php';
            $ar = new Arara12();
            $ar ->setPeso(2);
            $ar ->setIdade(2);
            $ar ->setMembros(2);
            $ar ->setCorPena("Azul e Amarelho");
            $ar ->fazerNinho();
            $ar ->locomover();
            $ar ->alimentar();
            $ar ->emitirSom();
            print_r($ar);
            
            echo "----------------------------------------";
            
        ?>
     </pre>
    </body>
</html>
