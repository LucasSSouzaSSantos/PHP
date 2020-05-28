<?php

/* 
 * Navegação pela Herança
 *         +----+
 *         | A  |
 *         +----+ 
 * A classe que não tem mãe é chamada de Raiz
 * A classe que não tem filha é chamada de folha
 * - Descendente
 * - Ancestral
 * Especiliazação: Percorrer a árvore de cima para baixo.
 * Generalização: Percorrer a árvore de baixo para cima.
 * 
 * Tipos de Herança:
 *  > Herança de implementação
 *  > Herança para Diferença
 * 
 * +----------------+
 * |Pessoa          |
 * +----------------+
 * |nome            |
 * |idade           |
 * |sexo            |
 * +----------------+
 * |fazerAniv()     |
 * +----------------+
 * 
 * +----------------+
 * |Visitante       |
 * +----------------+
 * |                |
 * +----------------+
 * |                |
 * +----------------+
 * 
 * +----------------+
 * |Aluno           |
 * +----------------+
 * |matricula       |
 * |curso           |
 * +----------------+
 * |PagarMens()     |
 * +----------------+
 * 
 * +----------------+
 * |Professor       |
 * +----------------+
 * |Especialidade   |
 * |salario         |
 * +----------------+
 * |receberAum()    |
 * +----------------+
 * 
 * +----------------+
 * |Bolsista        |
 * +----------------+
 * |bolsa           |
 * +----------------+
 * |renovarBolsa()  |
 * |pagarMens()     |
 * +----------------+
 * 
 * +----------------+
 * |Tecnico         |
 * +----------------+
 * |registroProf    |
 * +----------------+
 * |praticar()      |
 * +----------------+
 * 
 * Abstrato e Final
 * 
 * Classe Abstrata
 *  Não pode ser instanciada. Só pode servir como 
 * progenitora
 * Método Abstrato
 *  Declarado, mas não implementado na progenitora.
 * Só pode ser colocado em uma interface ou em uma 
 * classe abstrata.
 * Classe Final
 *  Não pode ser herdade por outra classe.
 * Obrigatoriamente folha.  
 * Método Final
 *  Não pode ser sobrescrito pelas suas sub-classes.
 * Obrigatoriamente herdado.
 * 
 * Classe abstrata Pessoa
 *  privado nome: Caractere
 *  privado idade: Inteiro
 *  privado sexo: Caractere
 * publico metodo final fazerAnic()
 * fimMetodo
 * fimClasse
 * 
 * Classe Visitante estende Pessoa Herança de implementação
 * 
 * fimClasse
 * 
 * Classe Aluno estende Pessoa Herança para diferença
 *  privado matricula: Inteiro
 *  privado curso: Caractere
 *  publico metodo pagarMensalidade()
 *  fimMetodo
 * fimClasse 
 * 
 * Classe Bolsista estende Aluno
 *  privado bolsa: Inteiro
 *  publico metodo renovarBolsa()
 * fimClasse
 * 
 * @sobropor
 * publico metodo pagarMensalidade()
 * 
 * fimMetodo 
 */        



