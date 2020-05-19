<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        <style>
            input{
                border-radius: 10px; 
            }
        </style>
    </head>
    <body>
        <div>
            <?php 
                 $v = isset($_GET["valor"])?$_GET["valor"]:1;
                 $c = 1;
                 do{
                     $p = $v * $c;
                     echo "$v x $c = $p";
                     echo "<br/>";
                     $c++;
                 }while ($c <= 10);
            ?>  
            <br/>
            <form method="get" action="Ex03html.php">
                
                <input type="submit" value="Voltar" class="botao"/>
            </form>
        </div>
    </body>
</html>

