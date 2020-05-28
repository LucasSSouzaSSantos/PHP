<?php
 abstract class Pessoa11 {
    private $nome;
    private $idade;
    private $sexo;
    
    public final function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

}
