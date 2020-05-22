<?php

class Caneta03 {
    public $modelo;
    public $cor;
    private $ponta;
    protected $tampada;
    protected $carga;
    
    public function rabiscar(){
        if ($this->tampada) {
            echo "<p>Caneta tampada não posso rabiscar!</p>";
        } else {
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    private function tampar(){
        $this-> tampada = true; // O this representa o objeto que chamou
    }
    private function destampar(){
        $this-> tampada = false;
    }
}
