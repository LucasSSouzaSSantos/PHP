<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        <style>
            input{
                border-radius: 10px;
                width: 100px;
            }
            span.primo{
                color: #7e050c;
            }
            p.grande{
                font-size: 20pt;
            }
            p.pequeno{
                font-size: 18pt;
            }
        </style>
    </head>
    <body>
        <div>
            <?php        
                $valor = $_GET["v"];
                $cont = 0;
                echo "<p class='grande'>ANALISANDO O NÚMERO $valor...</p>";
                echo "<p class='pequeno'>Valores multiplo: ";
                for($i = 1; $i <= $valor;$i++){
                    if($valor % $i == 0){
                        echo "$i ";
                        $cont++;
                    }
                }
                echo "</p>";
                if($cont == 2){
                    echo "<p class='pequeno'>Total de multiplos: $cont</p>";
                    echo "<p class='grande'>Resultado: <span class='primo'>$valor É PRIMO</span>.</p>";
                } else {
                    echo "<p class='pequeno'>Total de multiplos: $cont</p>";
                    echo "<p class='grande'>Resultado: $valor <span class='primo'>NÂO É PRIMO</span>.</p>";
                }
            ?>
            <form method="get" action="Ex04.html">
                <input type="submit" value="Voltar" class="botao"/>
            </form>
        </div>
    </body>
</html>

