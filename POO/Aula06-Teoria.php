<?php

/* 
 * Pilares da Programação Orientada a Objeto
 *  > Encapsulamente
 *     -> Definição: Ocultar partes independentes da implementaçao, permitindo
 * contruir partes invisíveis ao mundo exterior.
 *     -> Interface: É uma lista de serviços fornecidos por um componente. É o 
 * contato com o mundo exterior, que define o que pode ser feito com um objeto
 * dessa classe.
 *  > Importante
 *     -> Encapsular não é necessário, mas é uma boa prática para 
 * produzir Classes mais eficientes.
 *  > Vantagens em ecapsular:
 *     -> Tornar mudanças invisíveis
 *     -> Facilitar reutilização do código 
 *     -> Reduzir efeitos colaterais
 *  > Como encapsular
 *     -> Sintaxe da UML
 + -------------------------- +
 *     << interface >>        *
 *     Controlador            *
 + -------------------------- +
 *   + ligar()                *     
 *   + desligar()             *  
 *   + abrirMenu()            *  
 *   + fecharMenu()           *   
 *   + maisVolume()           *   
 *   + menosVolume()          *   
 *   + ligarMudo()            *   
 *   + desligarMudo()         *   
 *   + play()                 *   
 *   + pause()                *  
 + -------------------------- +
 * 
 * 
 + -------------------------- +
 *     ControleRemoto         *
 + -------------------------- +
 *   - volume                 *
 *   - ligado                 *
 *   - tocando                *
 + -------------------------- +
 *   + ligar()                *     
 *   + desligar()             *  
 *   + abrirMenu()            *  
 *   + fecharMenu()           *   
 *   + maisVolume()           *   
 *   + menosVolume()          *   
 *   + ligarMudo()            *   
 *   + desligarMudo()         *   
 *   + play()                 *   
 *   + pause()                *
 *   - setVolume()            *
 *   - getVolume()            *
 *   - setLigado()            *
 *   - getLigado()            *
 *   - setTocando()           *
 *   - getTocando()           *  
 + -------------------------- +
 *
 + ----------------------------------------------------- +
 *      interface Controlador                            *
 *  // Métodos Abstratos                                 *
 *      publico     abstrato    Metodo   ligar()         *
 *      publico     abstrato    Metodo   desligar()      *
 *      publico     abstrato    Metodo   abrirMenu()     *
 *      publico     abstrato    Metodo   fecharMenu()    *
 *      publico     abstrato    Metodo   maisVolume()    *
 *      publico     abstrato    Metodo   menosVolume()   *   
 *      publico     abstrato    Metodo   ligarMudo()     *
 *      publico     abstrato    Metodo   desligarMudo()  *
 *      publico     abstrato    Metodo   play()          *
 *      publico     abstrato    Metodo   pause()         *
 *                                                       *
 *  fimInterface                                         *
 + ----------------------------------------------------- +
 * 
 * 
 + ----------------------------------------------------- +
 *  Classe ControleRemoto                                *
 *  implementa Controlador                               *
 + ----------------------------------------------------- + 
 *      // Atributos                                     *   
 *      privado inteiro: volume                          *   
 *      privado lógico:  ligado                          *   
 *      privado lógico:  tocando                         *   
 *                                                       *       
 *      // Métodos Especiais                             *       
 *      publico Metodo Construtor()                      *   
 *          volume =  50                                 *    
 *          ligado =  falso                              *    
 *          tocando = falso                              *   
 *      FimMetodo                                        *
 *                                                       *    
 *      privado Metodo getVolume()                       *       
 *          retorne volume                               *   
 *      FimMetodo                                        *   
 *                                                       *       
 *      privado Metodo setVolume(volume: inteiro)        *     
 *          volume = volume                              *   
 *      FimMetodo                                        *   
 *                                                       *   
 *      privado Metodo getLigado()                       *     
 *          retorne ligado                               *   
 *      FimMetodo                                        *       
 *                                                       *       
 *      privado Metodo setLigado(ligado: lógico)         *                     
 *          ligado = ligado                              *   
 *      FimMetodo                                        *   
 *                                                       *   
 *      privado Metodo getTocando()                      * 
 *          retorne tocando                              *       
 *      FimMetodo                                        *       
 *                                                       *   
 *      privado Metodo setTocando(tocando: lógico)       *
 *          tocando = tocando                            *   
 *      FimMetodo                                        *
 *                                                       * 
 *   // Sobrescreendo Métodos                            *     
 *      publico Metodo ligar()                           *   
 *          setLigado(verdadeiro)                        *   
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo desligar()                        *   
 *          setLigado(falso)                             *   
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo abrirMenu()                       *   
 *          Escreva(getLigado())                         *
 *          Escreva(getVolume())                         *
 *          para i = 0 ate getVolume() passo 10 face     *
 *              Escreva("|")                             *
 *          FimPara                                      *
 *          Escreva(getTocando())                        *
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo fecharMenu()                      *   
 *          Escreva("Fechado Menu")                      *   
 *      FimMetodo                                        *  
 *                                                       *   
 *      publico Metodo maisVolume()                      * 
 *          Se (getLigado()) entao                       *
 *              setVolume(getVolume() + 1)               *
 *          FimSe   
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo menosVolume()                     * 
 *          Se (getLigado()) entao                       *
 *              setVolume(getVolume() - 1)               *
 *          FimSe                                        *
 *      FimMetodo                                        * 
 *                                                       *   
 *      publico Metodo ligarMudo()                       *   
 *          Se (getLigado() e getVolume() > 0) entao     *
 *              setVolume(0)                             *
 *          FimSe                                        *
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo desligarMudo()                    *   
 *          Se (getLigado() e getVolume = 0) entao       *
 *              setVolume(50)                            *
 *          FimSe                                        *   
 *      FimMetodo                                        *   
 *                                                       *   
 *      publico Metodo play()                            *   
 *          Se (getLigado() e nao getTocando()) entao    *
 *              setTocando(verdadeiro)                   *
 *          FimSe                                        *   
 *      FimMetodo                                        *   
 *                                                       *    
 *      publico Metodo pause()                           *   
 *          Se (getLigado() e getTocando()) entao        *
 *              setTocando(falso)                        *
 *          FimSe                                        *   
 *      FimMetodo                                        *   
 *                                                       *   
 + ----------------------------------------------------- +
 *  FimClasse                                            *
 + ----------------------------------------------------- + 
 */