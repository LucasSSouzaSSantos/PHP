<?php
require_once "Lutador.php";
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Métodos
    public function marcarLuta($L1, $L2) {
        if($L1->getCategoria() === $L2->getCategoria() && ($L1 != $L2)){
            $this->setAprovada(true);
            $this->setDesafiado($L1);
            $this->setDesafiante($L2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    
    public function lutar() {
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor){
                case 0:
                    echo "<p>E a luta terminou em EMPATE</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>E o vencedor é: ".($this->desafiado->getNome())." </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>E o vencedor é: ".($this->desafiante->getNome())."</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    
        
    }
        
    // Métodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }


}
