 * +--------------------+
 * | Conta              |
 * +--------------------+
 * |+ numConta          |
 * |# tipo              |
 * |- dono              |
 * |- saldo             |
 * |- status            |
 * +--------------------+
 * |+ abrirConta()      |
 * |+ fecharConta()     |
 * |+ depositar()       |
 * |+ sacar()           |
 * |+ pagarMensal()     |
 * |+ getNumConta()     |
 * |+ setNumConta()     |
 * |+ getTipo()         |
 * |+ setTipo()         |
 * |+ getDono()         |
 * |+ setDono()         |
 * |+ getSaldo()        |
 * |+ setSaldo()        |
 * |+ getStatus()       |
 * |+ setStatus()       |
 * +--------------------+

 + -------------------------------------------------- +
 *                  Definições                        *
 + -------------------------------------------------- + 
 * tipo da conta:                                     * 
 *  > Conta Corrente(CC)                              *   
 *  > Conta Poupança(CP)                              *      
 * abrirConta():                                      *      
 *  - Conta fechada status falso                      *                  
 *  - Conta aberta status verdadeiro                  *          
 *  - Tem que dizer o tipo de conta CC ou CP          *      
 *  - Se CC ganha 50 reais                            *              
 *  - Se CP ganha 150 reais                           *          
 * fecharConta():                                     *          
 *  - A conta não pode ter dinheiro dentro            *                  
 *  - Não pode ter débito                             *  
 * Depositar():                                       *      
 *  - Status verdadeiro                               *          
 * sacar():                                           *      
 *  - Status verdadeiro                               *  
 *  - tem que ter saldo                               *      
 *  - saque não pode ser maior que o saldo            *                  
 * pagarMensal():                                     *          
 *  - Conta Corrente paga 12 reais                    *              
 *  - Conta Poupaça pagar 20 reais                    *                      
 * Método Construtor                                  *  
 *  - nova conta for criada                           *  
 *  - status falso                                    *          
 *  - saldo igual à zero                              *          
 + -------------------------------------------------- +

