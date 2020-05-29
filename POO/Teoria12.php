<?php

/* 
 * Polimorfismo 
 *  Definição: Permite que um mesmo nome represente vários comportamentos 
 * diferentes.
 * Assinatura do Método
 *  Quantidade e os tipos dos parâmetros
 * 
 * Ex.:
 *  publico metodo calcMedia(n1: Real, n2: Real): Real
 * 
 *  publico metodo calcMedia(v1: Real, v2: Real): Inteiro 
 *  
 *  Os dois métodos tem a mesma assinatura, já que ele tem a mesma quantidade 
 * de parâmetro e os tipos também são iguais.
 * 
 * publico metodo calcMedia(bim: Inteiro, n1: Real, n2: Real): Real
 *  
 *  Nesse exemplo a assinatura é diferente, pois tem três parâmetro.
 * 
 * publico metodo calcMedia(n1: Real, n2: Real, n3: Real, n4: Real): Real
 * 
 *  Nesse exemplo é diferente já que tem 4 parâmetro.
 * 
 * publico metodo calcMedia(medMin: Real, medMax: Real, sit: Caractere,
 *                          bim: Inteiro): Caractere
 * 
 * Tipos de Polimorfismo
 *  > sobreposição
 *  > sobrecarga
 * 
 * Classe Animal
 *  - peso
 *  - idade
 *  - membros
 *  - (abs) locomover()
 *  - (abs) alimentar()
 *  - (abs) emitirSom()
 *  Classe mamifero
 *    - corPelo
 *  Classe reptil
 *    - corEscama
 *  Classe peixe
 *    - corEscama
 *    soltarBolha()
 *  Classe ave
 *    - corPena
 *    - fazerNinho()
 * 
 * obs.: Toda vez que uma classe tiver método abstratos, a classe também
 *       será abstrata.
 * 
 * classe abstrata Animal
 *  protegído peso: Real
 *  protegído idade: Inteiro
 *  protegído membros: Inteiro
 * 
 *  publico metodo abstrato locomover()
 *  publico metodo abstrato alimentar()
 *  publico metodo abstrato emitirSom()
 * fimClasse
 * 
 * Classe Mamifero estende Animal
 *  privado corPelo: Caractere
 *  @sobrepor
 *  publico metodo locomover()
 *      Escreva("Correndo")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo alimeentar()
 *      Escreva("Mamando")
 *  fimMetodo
 *  @sobrepor
 *  publico metodod emitirSom()
 *      Escreva("Som de Mamífero")
 *  fimMetodo
 * fimClasse
 * 
 * Classe Repitl estende Animal
 *  privado corEscama: Caractere
 *  @sobrepor
 *  publico metodo locomover()
 *      Escreva("Rastejando")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo alimentar()
 *      Escreva("Comendo Vegetais")
 *  fimMetodo
 *  @sobrepor
 *  publico metod emitirSOm()
 *      Escreva("som de Réptil")
 *  fimMetodo 
 * fimClasse
 * 
 * Classe Peixe estende Animal
 *  privado corEscama: Caractere
 *  @sobrepor
 *  publico metodo locomover()
 *      Escreva("Nadando")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo alimentar()
 *      Escreva("Comendo substâncias")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo emitirSom()
 *      Escreva("Peixe nã faz som")
 *  fimMetodo 
 *  @sobrepor
 *  publico metodo soltarBolha()
 *      Esceva("Soltou uma bolha")
 *  fimMetodo
 * fimClasse
 * 
 * Classe Ave estende Animal
 *  privado corPena: Caractere
 *  @sobrepor
 *  publico metod locomover()
 *      Escreva("Voando")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo alimentar()
 *      Escreva("Comendo frutas")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo emitirSom()
 *      Escreva("Som de ave")
 *  fimMetodo
 *  publico metodo fazerNinho()
 *      Escreva("Construindo um ninho")
 *  fimMetodo
 * fimClasse
 * 
 * // Programa Principal
 * m = novo Mamifero()
 * r = novo Reptil()
 * p = novo Peixe()
 * a = novo Ave()
 * 
 * m.setPeso(85.3)
 * m.setIdade(2)
 * m.setMembros(4)
 * m.locomover()
 * m.alimentar()
 * m.emitirSom()
 * 
 * p.setPeso(0.35)
 * p.setIdade(2)
 * p.setMembros(0)
 * p.alimentar()
 * p.locomover()
 * p.emitrSom()
 * p.soltarBolha()
 * 
 * a.setPeso(0.89)
 * a.setIdade(2)
 * a.setMembros(2)
 * a.locomover()
 * a.alimentar()
 * a.emitirSom()
 * a.fazerNinho()
 * 
 * obs.: Se for reparado no algoritmo acima, tem se metodos iguais sendo 
 * chamados por objetos diferente, mas as respostas são diferentes. Essa 
 * caracteristica é chamada de polimorfismo.
 * 
 * 
 * Polimorfismo de Sobreposição
 *  Acontece quando substituímos um método de uma superClasse na sua
 *  subclasse, usando a mesma assinatura.
 * 
 * Canguru(subclasse de mamifero)
 *  usarBolsa()
 *  locomover()
 * Cachorro(subclasse de mamifero)
 *  enterrarOsso()
 *  abanarRabo()
 * Cobra(subcalsse de reptil)
 * Tartaruga(subClasse de reptil)
 *  locomover()  
 * Goldfish(subClasse de Peixe)
 * Arara(subClasse de Ave)
 * 
 * classe Canguru estende Mamifero
 *  publico metodo usarBolsa()
 *      Escreva("Usando bolsa")
 *  fimMetodo
 *  @sobrepor
 *  publico metodo locomover()
 *      Escreva("Saltando")
 *  fimMetodo
 * fimClasse
 * 
 * Classe Cachorro estende Mamifero
 *  publico metodo enterrarOsso()
 *      Escreva("Enterrando Osso")
 *  fimMetodo
 *  publico metod abanarRabo()
 *      Escreva("Abanando o Rabo")
 * fimClasse
 * 
 * Classe Cobra estende Reptil
 * 
 * fimClasse
 * 
 * Classe Tartaruga estende Reptil
 *  @sobrepor
 *  publico metodo locomover()
 *      Escreva("Andando beeeeem devagar")
 *  fimMetodo
 * fimClasse
 * 
 * Classe GoldFish estende Peixe
 * 
 * fimClasse
 * 
 * Classe Arara estende Ave
 * 
 * fimClasse
 * 
 * // Programa Principal
 * m = novo Mamifero()
 * c = novo Canguru()
 * K = novo Cachorro()
 * 
 * m.setPeso(5.7)
 * m.setIdade(8)
 * m.setMembros(4)
 * m.locomover()
 * m.alimentar()
 * m.emitirSom()
 * 
 * c.setPeso(55.30)
 * c.setIdade(3)
 * c.setMembros(4)
 * c.locomover()
 * c.alimentar()
 * c.emitirSom()
 *  
 * k.setPeso(3.94)
 * k.setIdade(5)
 * k.setMembros(4)
 * km.locomover()
 * k.alimentar()
 * k.emitirSom()
 * 
 */


