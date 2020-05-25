/* 
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Curso Em Video Resposta                                           *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Inicio(nome e atributos da classe)                                *
 + ------------------------------------------------------------------------------------------------------- +
 *                  Classe Conta                                                                           *
 *                                                                                                         *
 *  publico      numConta:    Inteiro                                                                      *
 *  protegido    tipo:        Caractere                                                                    *
 *  privado      dono:        Caractere                                                                    *
 *  privado      saldo:       Real                                                                         *
 *  privado      status:      lógico                                                                       *
 *                                                                                                         *  
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Métodos Especiais                                                 *
 + ------------------------------------------------------------------------------------------------------- +
 *  Metodo Construtor()                                                                                    *
 *      saldo = 0                                                                                          *
 *      status = falso                                                                                     *              
 * FimMetodo                                                                                               *      
 *                                                                                                         * 
 * publico getNumConta()                                                                                   *
 *      retorne numConta                                                                                   *  
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setNumConta(n: Inteiro)                                                                         *
 *      numConta = num                                                                                     *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico getTipo()                                                                                       *
 *      retorne tipo                                                                                       *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setTipo(t: caractere)                                                                           * 
 *      tipo = t                                                                                           *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico getDono()                                                                                       *
 *      retorne Dono                                                                                       *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setDono(d: caractere)                                                                           *
 *      dono = d                                                                                           *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico getSaldo()                                                                                      *
 *      retorne saldo                                                                                      *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setSaldo(sa: Real)                                                                              *
 *      saldo = s                                                                                          *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico getStatus()                                                                                     *
 *      retorne status                                                                                     *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setStatus(s: lógico)                                                                            *
 *      status = s                                                                                         *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Métodos                                                           *
 + ------------------------------------------------------------------------------------------------------- +
 *                                                                                                         *
 * publico Metodo abrirConta(t: caracter)                                                                  *
 *      setTipo(t)                                                                                         *
 *      setStatus(verdadeiro)                                                                              *
 *      se (t = "CC") entao                                                                                *
 *          saldo = 50 ou setSaldo(50)                                                                     *
 *      Senão se (t = "CP") então                                                                          *
 *          saldo = 50 ou setSaldo(150)                                                                    *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo fecharConta()                                                                            *
 *      Se (saldo > 0) então                                                                               *
 *          Escreva("Conta com dinheiro")                                                                  *
 *      Senão se (saldo < 0) então                                                                         *                                                                         *
 *              Escreva("Conta em débito")                                                                 *
 *          Senão                                                                                          *             
 *              setStatus(falso) ou Status = falso                                                         *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo depositar(valor: Real)                                                                   *
 *      Se (status == verdadeiro) então                                                                    *
 *          saldo = saldo + v ou setSaldo(getSaldo() + v)                                                  * 
 *      Senão                                                                                              *
 *          Escreva("Impossivel depositar")                                                                *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo sacar(valor: Real)                                                                       *
 *      Se (status = verdadeiro) então                                                                     *
 *          Se (saldo > v) então                                                                           *
 *              saldo = saldo - v                                                                          *     
 *          senão                                                                                          *
 *              Escreva("Saldo insuficiente")                                                              * 
 *          fimSe                                                                                          *
 *      Senão                                                                                              *
 *          Escreva("Impossível sacar")                                                                    * 
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo pagarMensal()                                                                            *
 *      var v: Real                                                                                        *
 *      Se getTipo() = "CC" então                                                                          *
 *          v = 12                                                                                         *
 *      Senão                                                                                              *
 *          v = 20                                                                                         *
 *      fimSe                                                                                              *
 *     Se(status = verdadeiro) então                                                                       *
 *          se (saldo > v) então                                                                           *
 *              saldo = saldo - v                                                                          * 
 *          senão                                                                                          *
 *              Escreva("Saldo insuficiente")                                                              *
 *          fimSe                                                                                          *
 *      senão                                                                                              *
 *          Escreva("Impossível pagar")                                                                    *
 *      fimSe                                                                                              *
 *                                                                                                         *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * fimClasse                                                                                               *
 + ------------------------------------------------------------------------------------------------------- +
 * 
 */


