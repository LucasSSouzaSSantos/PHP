<?php
class Conta 
{
   // Atributos Da Minha Classe:    
   public           $numConta;
   protected        $tipo;
   private          $dono;
   private          $saldo;
   private          $status;
   
   // Métodos da Classe Conta
   
   public function abrirConta($tipo)
   {
       $this->setTipo($tipo);
       $this->setStatus(true);
       
       if ($this->getTipo() == "CC")
       {
           $this->setSaldo(50);
       }
       
       elseif ($this ->getTipo())
       {
           $this->setSaldo(150);
       }
    }
    
    public function fecharConta()
    {
        if($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro.</p>";
        }
        elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito.</p>";
        } else {
            $this->setStatus(false);
        }
    }
    
    public function depositar($valor) 
    {
        if ($this->getStatus() == true)
        {
            $this->setSaldo($valor + $this->getSaldo());
        }
        else 
        {
            echo "<p>Impossivel depositar.</p>";
        }
    }
    
    public function sacar($valor) {
        if ($this->getStatus() == true){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "<p>Saldo insuficinente.</p>";
            }
        } else {
            echo "<p>Impossível sacar.</p>";
        }
    }
    
    public function pagarMensal() {
        if($this->getTipo() == "CC"){
            $v = 12;
        }
        else {
            $v = 20;
        }
        if($this->getStatus() == true){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente.</p>";
            }
        }else{
            echo "<p>Impossível pagar.</p>";
        }
    }

    
   // Métodos Especiais(Construtor, Getter e Setter)
   
   function __construct() {
       $this->setSaldo(0);
       $this->setStatus(false);
       echo "<p>Conta criada com sucesso!</p>";
   }
   
   public function  getNumConta() {
       return $this->numConta;
   }
   
   public function  setNumConta($numConta): void {
       $this->numConta = $numConta;
   }

   public function getTipo() {
       return $this->tipo;
   }

   public function setTipo($tipo): void {
       $this->tipo = $tipo;
   }

   public function getDono() {
       return $this->dono;
   }

   public function setDono($dono): void {
       $this->dono = $dono;
   }

   public function getSaldo() {
       return $this->saldo;
   }

   public function setSaldo($saldo): void {
       $this->saldo = $saldo;
   }

   public function getStatus() {
       return $this->status;
   }
   
   public function setStatus($status): void {
       $this->status = $status;
   }
   
}
