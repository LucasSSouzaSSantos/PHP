 + ------------------------------------------------------------------------------------------------------- +
 *                                       Minha Resposta da Aula 05                                         *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Inicio(nome e atributos da classe)                                *
 + ------------------------------------------------------------------------------------------------------- +
 *                  Classe Conta                                                                           *
 *                                                                                                         *
 *  publico      numConta:    Caractere                                                                    *
 *  protegido    tipo:        Caractere                                                                    *
 *  privado      dono:        Caractere                                                                    *
 *  privado      saldo:       Real                                                                         *
 *  privado      status:      lógico                                                                       *
 *                                                                                                         *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Desenvimento dos Métodos                                          *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       Métodos Especiais(Construtor, get e set)                          *
 + ------------------------------------------------------------------------------------------------------- +
 *  Metodo Construtor(n: caractere, nu: caractere)                                                         *
 *      setDono(n)                                                                                         *
 *      setNumConta(nu)                                                                                    *      
 *      setStatus(falso)                                                                                   *  
 *      setSaldo(0)                                                                                        *              
 * FimMetodo                                                                                               *      
 *                                                                                                         * 
 * publico getNumConta()                                                                                   *
 *      retorne numConta                                                                                   *  
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setNumConta(num: caractere)                                                                     *
 *      numConta = num                                                                                     *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico getTipo()                                                                                       *
 *      retorne tipo                                                                                       *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico setTipo(t: caractere)                                                                           * 
 *      tipo = t                                                                                           *
 *      Se t == "CC" então                                                                                 *
 *          setSaldo(50)                                                                                   *
 *      Senão                                                                                              *
 *          setSaldo(150)                                                                                  *
 *      fimSe                                                                                              *
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
 *      saldo = saldo + sa                                                                                 *
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
 * publico Metodo abrirConta(ti: caractere, t: caractere, s: logico)                                       *
 *      setTipo(ti)                                                                                        *
 *      setStatus(s)                                                                                       *
 *      setTipo(t)                                                                                         *
 *      se (t == "CC") entao                                                                               *
 *           setSaldo(50)                                                                                  *
 *      Senão                                                                                              *
 *          setSaldo(150)                                                                                  *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo fecharConta()                                                                            *
 *      Se (status == verdadeiro) então                                                                    *
 *          Escreva("Você estar tentando fachar uma conta que não foi aberta")                             *
 *      Senão                                                                                              *
 *          Se (saldo == 0) então                                                                          *
 *              Escreva("Conta Fechada Com Sucesso")                                                       *
 *              status = falso                                                                             *
 *          Senão                                                                                          *
 *              Se (saldo > 0) então                                                                       *
 *                  Escreva("Você tem dinheiro nessa conta, saque antes de fechar")                        *
 *              Senão                                                                                      *
 *                  Escreva("Você ainda tem débito na conta, pague antes de fechar")                       *
 *              fimSe                                                                                      *
 *          fimSe                                                                                          *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo depositar(valor: Real)                                                                   *
 *      Se (status == falso) então                                                                         *
 *          Escreva("Conta ainda não foi aberta, fale com um dos nossos gerentes, e abra sua conta!")      *
 *      Senão                                                                                              *
 *          setSaldo(valor)                                                                                *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo sacar(valor: Real)                                                                       *
 *      Se (status == falso) então                                                                         *
 *          Escreva("Essa conta ainda não foi aberta, fale com um dos nossos gerente, e abra sua conta")   *
 *      Senão                                                                                              *
 *          Se (saldo > 0) então                                                                           *
 *              Escreva("Você não tem saldo na conta")                                                     *
 *          Senão                                                                                          *
 *              Se (valor > saldo) então                                                                   *
 *                  Escreva("Saldo insuficeinte: ante de proseguir confirme seu saldo")                    *
 *              Senão                                                                                      *
 *                  setSaldo(-valor)                                                                       *
 *              fimSe                                                                                      *
 *          fimSe                                                                                          *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 * publico Metodo pagarMensal()                                                                            *
 *      Se getTipo() == "CC" então                                                                         *
 *          setSaldo(-12)                                                                                  *
 *      Senão                                                                                              *
 *          setSaldo(-15)                                                                                  *
 *      fimSe                                                                                              *
 * fimMetodo                                                                                               *
 *                                                                                                         *
 + ------------------------------------------------------------------------------------------------------- +
 *                                       fimClasse(Final da Classe)                                        *
 + ------------------------------------------------------------------------------------------------------- +
