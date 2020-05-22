<?php

/*
 * Linguagem de Modelagem Unificada(UML)
 * - Diagrama de Classes
 * +---------------------+
 * | Nome da Classe      |
 * +---------------------+
 * |      Atributos      |
 * |                     |
 * +---------------------+
 * |      Métodos        |
 * |                     |
 * +---------------------+
 * 
 * +----------------------+
 * |     Caneta           |
 * +----------------------+
 * |+ modelo              |
 * |+ cor                 |
 * |- ponta               |
 * |# carga               |
 * |# tampada             |
 * +----------------------+
 * |+ escrever()          |
 * |+ rabiscar()          |
 * |+ pintar()            |
 * |- tampar()            |
 * |- destampar()         |
 * +----------------------+
 * 
 * > Modificadores de Vizibilidade
 *  Indicam o nível de acesso aos componentes internos de
 * uma classe.
 * + pública: A classe atual e todas as outras classes tem
 * acesso a ela.
 * - privado: Somente a classe atual pode mexer.
 * # protegido: A classe atual e todas as suas sub-classes.
 * 
 * Classe Caneta
 *  publico modelo: caractere
 *  publico cor: caractere
 *  privado ponta: Real
 *  protegido carga: inteiro
 *  protegido tampada: logico
 * 
 *  publico metodo escrever()
 *  fimMetodo
 * 
 *  publico metodo rabiscar()
 *  fimMetodo
 * 
 *  fimClasse
 * 
 *  c1 = nova Caneta
 *  c1.modelo = "BIC CRISTAL"  vai funcionar visibilidade publica
 *  c1.Cor = "Azul"  vai funcionar visibilidade publica
 *  c1.ponta = 0.5 não vai funcionar visibilidade privada só a classe tem a acesso
 *  c1.carga = 80 não vai funcionar visibilidade protegida só a classe mâe e filha tem acesso
 * 
 * 
 *  */

