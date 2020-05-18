<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php
           $a = $_GET["ano"];
           $idade = date("Y") - $a;
    
    if ($idade < 16)
       {
            $tipoVoto = "não pode vota";
       } 
        else 
        {
                if(($idade >= 16 && $idade < 18) || ($idade > 65))   
                {
                  $tipoVoto = "seu voto é opcional";
                } 
                else
                    {
                    $tipoVoto = "seu voto é obrigatório";
                    }
        }
        echo "Você nasceu em $a e tem $idade anos e $tipoVoto.";
            ?>
            <br/>
        </div>
    </body>
</html>

