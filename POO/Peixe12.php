<?php
require_once "Animal12.php";
class Peixe12 extends Animal12{
    protected $corEscama;
    function soltarBolha() {
        echo "<p>Soltou Bolha</p>";
    }
    function locomover() {
        echo "<p>Nadando</p>";
    }
    function alimentar() {
        echo "<p>Comendo Algas Marinha</p>";
    }
    function emitirSom() {
        echo "<p>Emitindo Som</p>";
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
}
