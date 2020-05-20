<?php

// Funções para manipulações de String
// 1.Printf esse f é de formatado
$prod = "leite";
$preco = 4.5;
printf("<h1>O %s está custando R$ %.2f</h1>", $prod, $preco);

/*
 * %d valor decimal(positivo ou negativo)
 * %u valor decimal sem sinal(apenas positivos)
 * %f valor real
 * %s string 
 *  */

// 2.Print_r mostra os detalhes 

$x[0] = 4;
$x[1] = 5;
$x[2] = 3;

// print_r($x);
var_dump($x);
printf("<br/>");
var_export($x);
printf("<br/>");

// 3.Função wordwrap

$txt1 = "Este é um exemplo de string gigante que...";
$res = wordwrap($txt1,"<br>\n",false);
echo "$res";

$v2 = array (3, 7, 6, 2, 1, 9);
print_r($v2);

// 4.Função strlen
$txt2 = "Curso em Vídeo";
$tamanha = strlen($txt2);

// 5.Função trim
$nome = "xxxjoséxdaxSilvaxxx";
$novo = trim($nome);

// 6.Função ltrim
// 7.Função rtrim

// 8.Função str_word_count
// 0 -- conta as palavras da string
// 1 -- cria um vetor, aonde a primeira posição é ocupada
// pela primeira palavra e a ultima posição pela ultima palavra.
// 2 -- cria outro vetor 
$frase = "Eu vou estudar PHP";
$cont = str_word_count($frase, 0);
echo $cont;

// 9.Função explode: ele vai criar um vetor toda vez que encontrar o 
// caractere em branco.
$site = "Curso em Vídeo";
$vetor = explode(" ", $site);
print_r($vetor);

// 10.Função str_split: ele mostra cada letra em um indice separado do 
// vetor
$nome2 = "Maria";
$vetor1 = str_split($nome2);
print_r($vetor1);

// 11.Função implode:
$vetor2[0] = "Curso";
$vetor2[1] = "em";
$vetor2[2] = "Vídeo";
$texto2 = implode(" ", $vetor2);

// 12.Função chr: ele mostra a letra associado ao número passado

$letra = chr(67);

// 13.Função ord

$letra1 = "C";

