<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php
                 $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado]";
                 $ano  = isset($_GET["ano"])?$_GET["ano"]:0;
                 $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
                 $idade = date("Y") - $ano;
                 echo "$nome é $sexo e tem $idade anos";
            
            ?>
            <br/>
            <form method="post" action="enviar02.html">
                <br/>
                <input type="submit" value="voltar"/>
                
            </form>
        </div>
    </body>
</html>

