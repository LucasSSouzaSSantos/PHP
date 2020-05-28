<?php
require_once "Publicacao.php";
require_once "Pessoa.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    // Métodos especiais Contrutor, Get e Set
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setAutor($autor): void {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    
    // Métodos da classe Livro

    public function abrir() {
        $this->setAberto(true);
    }

    public function fechar() {
        $this->setAberto(false);
    }
    public function folhear($p) {
        if($p > $this->getTotPaginas()){
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($p);
        }
    }

    public function avancarPag() {
        if($this->getPagAtual() <= $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            $this->setPagAtual($this->getTotPaginas());
        }
    }
    public function voltarPag() {
        if ($this->getPagAtual() < 0){
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            $this->setPagAtual(0);
        }
    }
    public function detalhes() {
        echo "<br>Livro ". $this->titulo. " escrito por ". $this->getAutor();
        echo "<br>Total de páginas é ". $this->totPaginas. ". A página atual é ". $this->pagAtual.".";
        echo "<br>Sendo lido por ". $this->leitor->getNome();
    }
}
