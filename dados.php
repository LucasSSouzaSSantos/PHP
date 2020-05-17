<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php 
              $valor =  $_GET["v"];
              $raiz = round(sqrt($valor), 2);
              echo "O valor enviado foi $raiz";
        
            
            ?>
            <br/>
        </div>
    </body>
</html>

