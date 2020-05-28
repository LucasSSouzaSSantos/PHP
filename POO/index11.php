<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <pre>
        <?php
        require_once "Pessoa11.php";
        require_once "Visitante11.php";
        require_once "Aluno11.php";
        require_once "Bolsista11.php";
        
            $p1 = new Visitante11();
            $p1 ->setNome("Pedro");
            $p1 ->setIdade(24);
            $p1 ->setSexo("M");
            print_r($p1);
            
            $p2 = new Aluno11();
            $p2 ->setNome("Maria");
            $p2 ->setMatricula(11111);
            $p2 ->setCurso("Informática");
            $p2 ->setIdade(22);
            $p2 ->setSexo("M");
            $p2 ->pagarMensalidade();
            print_r($p2);
            
            $p3 = new Bolsista11();
            $p3 ->setMatricula(1112);
            $p3 ->setNome("Fernanda");
            $p3 ->setCurso("Matemática");
            $p3 ->setSexo("M");
            $p3 ->setIdade(25);
            $p3 ->setBolsa(400);
            $p3 ->pagarMensalidade();
            print_r($p3);            
            
        ?>
     </pre>
    </body>
</html>
