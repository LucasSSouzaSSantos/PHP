<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        <style>
            span.regiao{
                color: #7e050c;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
            $est = $_GET["estado"];
            switch ($est){
                case 1:
                    $regiao = "Região Norte";
                    break;
                case 2:
                    $regiao = "Região Nordeste";
                    break;
                case 3:
                    $regiao = "Região Centro-Oeste";
                    break;
                case 4:
                    $regiao = "Região Sudeste";
                    break;
                case 5:
                    $regiao = "Região Sul";
                    break;
            }
            echo "Você mora na <span class=regiao>$regiao</span>";
            ?>
            <form method="get" action="Ex02.html">
                <input type="submit" value="Voltar" class="botao"/>
            </form>
            <br/>
        </div>
    </body>
</html>

