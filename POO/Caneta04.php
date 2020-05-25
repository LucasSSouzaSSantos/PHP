<?php

class Caneta04 {
    // Atributos
    public $modelo;
    private $ponta;
    
    /*
     *Método Construtor: primeira maneira
     *public function __construct() {
     *   $this-> ponta = 0.5;
     *  }
     */
    
    // Método Construtor: segunda maneira
    public function Caneta04($m, $p) {
        $this->setModelo($m);
        $this->setPonta($p);
    }

    // Método Especiais
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
    
    
    
}
