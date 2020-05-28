<?php
require_once "Aluno11.php";
require_once "Pessoa11.php";
final class Tecnico11 extends Aluno11{
    private $registroProf;
    
    public function praticar() {
        
    }
    
    function getRegistroProf() {
        return $this->registroProf;
    }

    function setRegistroProf($registroProf): void {
        $this->registroProf = $registroProf;
    }


}
