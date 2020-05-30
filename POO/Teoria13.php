<?php
/* +----------+
 * | reagir() |
 * +----------+--------+----------------------------+
 * |   falar frase     |agradáve: abanar e latir    |
 * |                   |agressiva: rosnar           |
 * +-------------------+----------------------------+
 * |   hoário do dia   |manhã: abanar               |
 * |                   |tarde: abanar e latir       |
 * |                   |noite: ignorar              |
 * +-------------------+----------------------------+
 * |   dono            |é dono: abanar              |
 * |                   |não é: rosnar e latir       |
 * +-------------------+----------------------------+
 * |   idade e peso    |novo e leve: abanar         |
 * |                   |novo e pesado: latir        |
 * |                   |velho e leve: rosnar        |
 * |                   |velho e pesado: ignorar     |
 * +-------------------+----------------------------+
 * 
 * classe Abstrata Animal
 *  protegido peso: Real
 *  protegido idade: Inteiro
 *  protegido membros: Inteiro
 *  publico metodo abstrato emitirSom()
 * fimClasse
 * 
 * classe Mamifero estende Animal
 *  protegido corPelo: Caractere
 *  @sobrepor
 *  publico metodo emitirSom()
 *      escreva("Som de Mamifere")
 *  fimMetodo
 * fimClasse
 * 
 * classe Lobo estende Mamifero
 *  @sobrepor
 *  publico metodo emitirSom()
 *      escreva("Auuuuuuuuuuuuu!")
 *  fimMetodo
 * fimclasse
 * 
 * classe Cachorro estende Lobo
 *  @sobrepor
 *  publico metodo emitirSom()
 *      escreva("AU! AU! AU!")
 *  fimMetodo
 * fimClasse
 * 
 * classe Cachorro estende Lobo
 *  publico metodo reagir(frase: Caractere)
 *      se(frase "toma comida" ou frase "olá")
 *          escreva("Abanar e latir")
 *      senao
 *          escreva("Rosnar")
 *      fimSe
 *  fimMetodo
 * 
 *  publicoo metodo reagir(hora, min: Inteiro)
 *      se(hora<12)
 *          escreva("Abanar")
 *      senaoSe (hora >= 18)
 *          escreva("Ignorar")
 *      senao
 *          escreva("Abanar e Latir")
 *      fimSe
 *  fimMetodo
 * 
 *  publico metodo reagir(dono: Lógico)
 *      se(dono = verdadeiro)
 *          escreva("Abanar")
 *      senao
 *          escreva("Rosnar e Latir")
 *      fimSe
 *  fimMetodo
 *      
 *  publico metodo reagir(idade: Inteiro, peso: Real)
 *      se(idade < 5)
 *          se (peso < 10)
 *              escreva("Abanar")
 *          senao
 *              escreva("Latir")
 *          fimSe
 *      senao
 *          se(peso<10)
 *              escreva("Rosnar")
 *          senao
 *              escreva("Ignorar")
 *          fimSe
 *      fimSe
 *  fimMetodo
 * fimClasse
 * 
 * Obs.: Assinaturas diferentes mesma classe
 * Polimorfismo de SOBRECARGA
 * 
 * 
 * // Programa Principal
 * 
 * c = novo Cachorro()
 * c.reagir("Olá")
 * c.reagir("Vai apanhar")
 * c.reagir(11, 45)
 * c.reagir(21, 00)
 * c.reagir(verdadeiro)
 * c.reagir(falso)
 * c.reagir(2, 12.5)
 * c.reagir(17, 4.5)
 * 
 * POLIMORFISMO DE SOBREPOSIÇÃO
 *      Mesma Assinatura Classes Diferente
 * POLIMORFISMO DE SOBRECARGA
 *      Assinatura Diferentes Mesma Classe
 */
