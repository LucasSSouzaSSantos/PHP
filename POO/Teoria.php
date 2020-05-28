<?php

/* 
 * > Relacionamento entre Classes
 + ---------------------------- +
 *      Lutador                 *
 + ---------------------------- +
 *      - nome                  *   
 *      - nacionalidade         *   
 *      - idade                 *                          
 *      - altura                *   
 *      - peso                  *   
 *      - categoria             *   
 *      - vitorias              *   
 *      - derrotas              *   
 *      - empates               *   
 + ---------------------------- +
 *      + apresentar()          *
 *      + status()              *
 *      + genharLuta()          * *     dispulta >
 *      + perderLuta()          * --------- +
 *      + empatarLuta()         *           |
 + ---------------------------- +           | 
                                            |
                                            |
 + ---------------------------- +           |
 *           Luta               * 0...*     |
 + ---------------------------- + <>------- +
 *      desafiado               *
 *      desafiante              *
 *      rounds                  *
 *      aprovada                *
 + ---------------------------- +
 *      marcarLuta()            *
 *      lutar()                 *
 + ---------------------------- +
 * 
 * Regras da Luta
 *  > Só pode ser marcada entre lutadores da mesma
 *    categoria.
 *  > Desafiado e desafiante devem ser lutadores 
 *    diferentes
 *  > Só pode acontecer se estiver aprovada.
 *  > Só pode ter como resultado a vitória de um dos
 *    lutadores ou o empante.
 * 
 * 
 * publico metodo marcarLuta(l1, l2: Lutador)
 *      se (l1.getCategoria() = l2.getCategoria())
 *          e (l1 <> l2) entao
 *              aprovada = verdadeiro
 *              desafiado = l1
 *              desafiante = l2
 *      Senao
 *              apravada = falso
 *              desafiado = nulo
 *              desafiante = nulo
 *      FimSe
 * fimMetodo
 
  
 * publico metodoo lutar()
 *      Se(aprovada)
 *          desafiado.apresentar()
 *          desafiante.apresentar()
 *          vencedor = aleatório(0...2)
 *          escolha(vencedor)
 *              caso 0:
 *                  Escreva("Empatou!")
 *                  desafiado.empatarLuta()
 *                  desafiante.empatarLuta()
 *              caso 1:
 *                  Escreva(desafiado.getNome())
 *                  desafiado.ganharLuta()
 *                  desafiante.perderLuta()
 *              caso 2:
 *                  Escreva(desafiante.getNote())
 *                  desafiado.perderLuta()
 *                  desafiante.ganharLuta()
 *      Senao
 *          Escreva("Luta não pode acontecer")
 *      FimSe
 * FimMetodo 
 * 
 * 
    
    
 * // Programa Principal
 * 
 * L: vetor[0...5]
 * L[0] = novo Lutador(...)
 * L[1] = novo Lutador(...)
 * L[2] = novo Lutador(...)
 * L[3] = novo Lutador(...)
 * L[4] = novo Lutador(...)
 * L[5] = novo Lutador(...)
 * 
 * UEC01 = novo Luta()
 * UEC01.marcarLuta(L[0], L[1])
 * UEC01.lutar()
 * 
 */

