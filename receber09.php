<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php
                $c = isset($_GET["c"])?$_GET["c"]:1;
                $f = isset($_GET["f"])?$_GET["f"]:2;
                $i = isset($_GET["i"])?$_GET["i"]:1;
                
                if($c < $f){
                    while ($c <= $f){
                    echo "$c ";
                    $c += $i;
                }
                } else {
                    while ($c >= $f){
                        echo "$c ";
                        $c -= $i;
                    }
                }
            
            ?>
            <form method="get" action="enviar09.html">
                <input type="submit" value="Voltar" class="botao"/>
                
            </form>
            <br/>
        </div>
    </body>
</html>

