<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php
              // Como utilizar rotinas externas ?
                // comando include
                include "funcoes.php";
                echo "<h1>Testando novas funções</h1>";
                
                // comando require
                require "funcoes.php";
                
                // comando include_once
                // comando require_once
                
                ola();
                mostraValor(4);
            ?>
            <br/>
        </div>
    </body>
</html>

