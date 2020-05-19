<?php
// Condições de Múltiplos Casos

$op = 2;
switch ($op){
case 1:
    echo 'A';
    break;
case 2:
    echo 'B';
    break;
case 3:
    echo 'C';
    break;
default:
    echo 'Erro';
}

switch ($op){
    case 1:
    case 2:
    case 3:
        echo 'Tipo 1';
    case 4:
    case 5:
        echo 'Tipo 2';
    default:
        echo 'Tipo 3';
}


