<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2{
                margin: 0px;
                text-align: center;
            }
            .corpo{
                background-color: #aaaaaa;
                padding: 10px 10px 10px 10px;
            }
        </style>
    </head>
    <body>
    <div class="corpo">
        <h2>Programa de PHP </h2>
        
        
        <hr>
        <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");
            
            $l[0] = new Livro("PHP Básico", "José da Silva", 300,$p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
            
            $l[0] ->abrir();
            $l[0] ->folhear(1);
            $l[0] ->voltarPag();
            $l[0] ->voltarPag();
            $l[0] ->detalhes();
        ?>
      </pre>
    </div>
    </body>
</html>
