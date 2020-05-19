<!Doctype html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        <style>
            span.cor{
                color: #7e050c;
            }
            .voltar{
                width: 150px;
                height: 50px;
                margin-top: 10px;
                font-family: sans-serif;
                color: #fff;
                font-size: 12pt;
                background-color: #273747;
                border-radius: 10px;
                
            }
            
        </style>
        
    </head>
    <body>
        <div>
            <?php
                $nota1 = $_GET["nota1"];
                $nota2 = $_GET["nota2"];
                $media = ($nota1 + $nota2) / 2;
                if($media <= 5){
                    $situacao = "Reprovado";
                }
                elseif ($media >= 7) {
                $situacao = "Aprovado";
            } else {
                $situacao = "Recuperação";
            }
                echo "A média de <span class=cor>$nota1</span> e <span class=cor>$nota2</span> é igual à <span class=cor>$media</span>.";
                echo '<br>';
                echo "Situação do aluno: <span class=cor>$situacao</span>";
            ?>
            
            <form method="get" action="Ex01.html">
                <input type="submit" value="Voltar" class="voltar"/>
            </form>
            <br/>
        </div>
    </body>
</html>