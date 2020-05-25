<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    // Métodos Especias
    function __construct($nome, $nacionalidade, $idade,
        $altura, $peso, $vitorias, $derrotas, $empates) {
        
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    function getNome() {
        return $this->nome;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
        
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setCategoria(): void {
        if($this->getPeso() < 52.2){
            $this->categoria = "Invalido";
        }elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        }elseif ($this->getPeso()< 83.9) {
            $this->categoria = "Médio";
        }elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
        
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setEmpates($empates): void {
        $this->empates = $empates;
    }

    // Métodos 
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function apresentar() {
        echo "<br>Lutador: ". ($this->getNome());
        echo "<br>Origem: ". ($this->getNacionalidade());
        echo "<br>Idade: ".($this->getIdade(). " anos");
        echo "<br>Altura: ".($this->getAltura())." metros";
        echo "<br>Peso: ". ($this->getPeso()). " Kg</h3>";
        echo "<br>Ganhou: ". ($this->getVitorias());
        echo "<br>Perdeu: ". ($this->getDerrotas());
        echo "<br>Empatou: ". ($this->getEmpates());
        
    }
    public function status() {
        echo "<br>Nome: ".($this->getNome());
        echo "<br>É um peso ". ($this->getCategoria());
        echo "<br>Vitórias: ". ($this->getVitorias());
        echo "<br>Derrotas: ". ($this->getDerrotas());
        echo "<br>Empates: ". ($this->getEmpates());
    }
    
}
