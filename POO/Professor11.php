<?php
require_once "Pessoa11.php";
class Professor11 extends Pessoa11{
    private $especialidade;
    private $salario;
    
    public function receberAumento() {
        
    }
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario): void {
        $this->salario = $salario;
    }
}
