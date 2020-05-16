<?php

/*@var $n1 int */
$n1 = $_GET["a"];
/* @var $n2 int */
$n2 = $_GET["b"];
$s1 = $n1  + $n2; 
echo "SOMA = $s1";
echo '<br>';
$s2 = $n1  - $n2;
echo "SUBTRAÇÃO = $s2";
echo '<br>';
$s3 = $n1  * $n2;
echo "MULTIPLICAÇÃO = $s3";
echo '<br>';
$s4 = $n1  / $n2;
echo "DIVISÃO = $s4";
echo '<br>';
$s5 = $n1 % $n2;
echo "RESTO = $s5";
echo '<br>';

/*
 * inserindo valores de forma personalisada:
 *
 *  http://localhost/aula05.php?c=3&b=2
 * 
 *  $n3 = $_GET["c"]
 *  $n4 = $_GET["d"]
 *  */ 

/*

 * Funções Matemáticas
 *  abs()               Valor Absoluto
 *  pow()               Potenciação
 *  sqrt()              Raiz Quadrada
 *  round()             Arredondamento
 *  intval()            Valor Inteiro da Variável
 *  number_format()     Formatação
 *  */

