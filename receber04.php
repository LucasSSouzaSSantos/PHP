<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link  href="_css/estilo.css" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <?php        
                $a = isset($_GET["ano"])? $_GET["ano"]:1990;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e nesse ano tem ou vai fazer $i anos.";
                if ($i >= 18){
                    $v = "já pode votar";
                    $d = "já pode dirigir";
                            
                }else{
                    $v = "não pode votar";
                    $d = "não pode dirigir";
                }
                echo '<br/>';
                echo "Com essa idade você $v e $d.";
            ?>
            <br/>
        </div>
    </body>
</html>

