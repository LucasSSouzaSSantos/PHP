<?php
require_once "Pessoa11.php";
class Aluno11 extends Pessoa11{
    private $matricula;
    private $curso;
    
    public function pagarMensalidade() {
        echo "<p>Mensalidade Paga</p>";
    }
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
