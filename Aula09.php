<?php
// operador ternário
$maior = $a > $b ? $a : $b;

// condição simples
 if ($a > $b){
     $maior = $a;
  }
  else{
      $maior = $b;
      
  }

// condição composta
  $idade = 28;
  
  if ($idade < 16){
      $tipoVoto = "nãovota";
  } else {
      if(($idade >= 16 && $idade < 18) || ($idade > 65)){
          $tipoVoto = "voto opcional";
      } else {
          $tipoVoto = "voto obrigatório";
      }
      
}
// condição aninhada

  $idade1 = 28;
  
  if ($idade1 < 16)
  {
      $tipoVoto = "nãovota";
  } 
  elseif(($idade1 >= 16 && $idade1 < 18) || ($idade1 > 65))
  {
     $tipoVoto = "voto opcional";
  }
  else 
  {
     $tipoVoto = "voto obrigatório";
  }
  