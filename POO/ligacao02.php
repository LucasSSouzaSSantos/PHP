<?php

class ligacao02 {
    // Atributos da minha classe
    var $nome;          // Caractere
    var $carga;         // Inteiro
    var $numero;        // lógico
    
    // Métodos da minha classe
    function discar(){
        echo "Discando Número...<br/>";
    }
    function ligar()
    {
        if ($this-> carga > 0)
        {
                if ($this-> numero)
                {
                    echo "Ligando para $this->nome<br/>";
                }
                else 
                {
                    echo "Não existe esse contato<br>";
                }
        } else 
        {
                echo "Carga insuficiente <br>";
        }
    }
    function falar($msg)
    {
        echo "Falando: $msg<br/>";
    }
    function ouvir($msg)
    {
        echo "Ouvindo: $msg<br>";
    }
    
}
