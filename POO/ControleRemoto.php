<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    // Métodos especiais construtor, get e set
    
    public function __construct() {
        $this->setLigado(false);
        $this->setTocando(false);
        $this->setVolume(50);
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    // Implementação dos Métodos da minha interface

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }
    
    public function abrirMenu() {
        echo "<br>Ligado: ".($this->getLigado()?"SIM":"Não");
        echo "<br>Tocando: ".($this->getVolume()?"SIM":"NÃO");
        echo "<br>Volume: ".$this->getVolume(). " ";
        for($i = 0; $i <= $this->getVolume(); $i+=10){
            echo "| ";
        }
    }

    public function fecharMenu() {
        echo "<p>Fecando Menu</p>";
    }

    public function maisVolume() {
        if($this->getLigado() && $this->getVolume() <= 100){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado() && $this->getVolume() >= 0){
            $this->setVolume($this->getVolume() - 5);
        }
        
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }        
    }

    public function play() {
         if($this->getLigado() && !($this->getTocando())){
             $this->setTocando(true);
         }       
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }        
    }
}
