<?php
require_once 'Animal12.php';

class Mamifero12 extends Animal12{
    protected $corPelo;
    public function locomover() {
        echo "<p>Correndo</p>";
    }
    public function alimentar() {
        echo "<p>Mamando</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo): void{
        $this->corPelo = $corPelo;
    }
}
