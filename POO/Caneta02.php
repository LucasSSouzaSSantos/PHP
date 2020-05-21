<?php

class Caneta02 {
    var $modelo;
    var $cor;
    var $ponta;
    var $tampada;
    var $carga;
    
    function rabiscar(){
        if ($this->tampada) {
            echo "<p>Caneta tampada não posso rabiscar!</p>";
        } else {
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    function tampar(){
        $this-> tampada = true; // O this representa o objeto que chamou
    }
    function destampar(){
        $this-> tampada = false;
    }
}
