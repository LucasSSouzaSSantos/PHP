<?php
require_once 'Mamifero12.php';
class Canguru12 extends Mamifero12{
    function usarBolsa(){
        echo "<p>Usando a Bolsa</p>";
    }
    function locomover() {
        echo "<p>Saltando</p>";
    }
}