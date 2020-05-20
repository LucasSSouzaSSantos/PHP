<?php

// Formas de envio de parâmetros

function teste1($x){
    $x = $x + 2;
    echo $x;
}

function teste2(&$x){
    $x = $x + 2;
    echo $x;
}
// Passagem por VALOR
$a1 = 3;
teste1($a1);
echo $a1;
// Passagem por REFERÊNCIA
$a2 = 3;
teste2($a2);
echo $a2;
