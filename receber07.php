<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php
                $n = isset($_GET["num"])?$_GET["num"]:0;
                $o = isset($_GET["oper"])?$_GET["oper"]:1;
                switch ($o){
                case 1:
                    $nome_op = "do Dobro";
                    $r = $n * 2;
                    break;
                case 2:
                    $r = pow($n, 3);
                    $nome_op = "elevado ao Cubo";
                    break;
                case 3:
                    $r = round(sqrt($n), 2);
                    $nome_op = "de Raiz Quadrada";
                    break;
                default:
                    echo 'ERRO';
                }
                echo "O resultado da operação $nome_op é $r";
            ?>
            <form method="get" action="enviar07.html">
            <input type="submit" value="Voltar" class="botao"/>
        </form>
            <br/>
        </div>
    </body>
</html>

