<?php

// Vetores em PHP

$n = array(3, 5, 8, 2);

foreach ($n as $valor){
    echo $valor;
}

print_r($n);
var_dump($n);

echo "O vetor tem ".cout($n). "elementos.";


// Gerenciando os últimos elementos

array_push($n, 7);
array_pop($n);

// Gerenciar os primeiros elementos

array_unshift($n, 7);
array_shift($n);

// ordenando vetores

sort($n);

// ordem reversa

rsort($n);

// Ordenação Associativa 

asort($n);

// Ordem Associativa Reversa

arsort($n);

// Ordem por Chaves

ksort($n);

// Ordem Reversa por Chaves

krsort($n);




