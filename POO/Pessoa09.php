<?php

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    // Métodos Especiais(Construtor, get e set)
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    function getNome() {
        return $this->nome;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    // Métodos da classe Pessoa
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }
}
