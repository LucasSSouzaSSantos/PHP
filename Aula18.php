<?php

// Vetores em Algoritmo

$n[0] = 3;
$n[1] = 5;
$n[2] = 8;
$n[3] = 2;
$n[4] = 7;

/*
    Vetores dentro do PHP é dinâmico, pois não é preciso dizer o tamanho
 * do vetor, já se eu quiser um novo espaço; o PHP, aloca memória, para 
 * ser usado um novo espaço.
 *  */

$n1 = array(3, 4, 5, 7);
$n1[4] = 9;
$n1[] = 12;

/*
    Na linha 17 estar escrito outra maneira de criar um vetor. Caso eu 
 * queira incluir mais algum número, dentro do meu vetor n1, as linhas 
 * 18 e 19 estão mostrando como. A linha 18 mostra como é criado explici-
 * tamente em qual posição vai ser colocado o novo valor. Já a linha 19,
 * diz que é para ser criado uma nova posição n + 1, e o valor dessa posi-
 * ção é informado.
 *  */

// Criando vetor por RANGE

$c = range(5, 20, 5);

// Utilizando o FOREACH

foreach ($c as $valor){
    echo "$valor";
}

// Chaves Personalizadas

$v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");

/*
    Ele vai criar um vetor com o seguinte arranjo:
 *  A na posição 1°
 *  B na posição 3°
 *  C na posição 6°
 *  D na posição 8°
 *  Se caso eu quiser inserir um novo elemento, é só digitar: 
 *                      v[] = "E";                            
 *  O PHP vai acrescentar mais um elemento logo após o ultimo indice. Mas
 *  se eu resolver eliminar o elemento é só fazer: 
 *                      unset($v[9]);                                   
 *  que o PHP, elimina o elemento na posição número 9. 
 *  */

// Chaves Associativas

$cad = array( "nome" => "Ana",
              "idade" => 23,
              "peso" => 78.5);

$cad["fuma"] = true;

// Utilizando o foreach Associativo

foreach ($cad as $campo => $valor){
    echo "O valor de $campo é $valor";
}

$p = array(array(2, 3), array(3, 4), array(9, 5));

