<?php
require_once 'Animal12.php';
class Reptil12 extends Animal12{
    protected $corEscama;
    
    function locomover() {
        echo "<p>Rastejando</p>";
    }
    function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }
    function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
