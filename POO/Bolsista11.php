<?php
require_once "Aluno11.php";
final class Bolsista11 extends Aluno11{
    private $bolsa;
    
    public function renovarBolsa() {
        echo "Bolsa Renovada!";
    }
    
    final public function pagarMensalidade() {
        echo"<p>Esse aluno é insento de mensalidade!</p>";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }
}
