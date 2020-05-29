<?php
require_once 'Animal12.php';
class Ave12 extends Animal12{
    protected $corPena;
    
    function fazerNinho(){ echo "<p>Fez um Ninho</p>";}

    public function alimentar() { echo "<p>Comendo frutas"; }
    
    function locomover() {echo "<p>Voando</p>";}
    
    function emitirSom() { echo "<p>Som de Ave</p>"; }
    
    function getCorPena() { return $this->corPena; }

    function setCorPena($corPena): void { $this->corPena = $corPena; }
}
