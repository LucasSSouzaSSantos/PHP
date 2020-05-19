<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        <style>
            input{
                border-radius: 10px;
            }
            select{
                border-radius: 10px;
            }
        </style>
        
    </head>
    <body>
        <div>
            <form method="get" action="Ex03.php">
                <label>Número: </label>
                <select name="valor" class="botao">
                    <?php 
                    $c = 1;
                        while ($c <= 10){
                            echo "<option value='$c'>$c</option>";                            
                            $c++;
                        }
                    ?>
                </select>
                <input type="submit" value="Calcular" class="botao"/>
                
            </form>         
        </div>
    </body>
</html>

