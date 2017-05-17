<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {
   private $titulo;
   private $autor;
   private $totPaginas;
   private $pagAtual;
   private $aberto;
   private $leitor;
   
   
   function __construct($titulo, $autor, $totPaginas, $leitor) {
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->totPaginas = $totPaginas;
       $this->leitor = $leitor;
       $this->aberto = false;
       $this->pagAtual = 0;
   }

   
   
   public function detalhes(){
       echo "O tulo é: ".$this->getTitulo()."<br>";
       echo "Escrito por: ".$this->getAutor()."<br>";
       echo "Contem: ".$this->getTotPaginas()." paginas <br>";
       echo "Está sendo lido por: ".$this->leitor->getNome()."<br>";
       echo "Pagina atual: ".$this->getPagAtual()."<br>";
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

   function setTitulo($titulo) {
       $this->titulo = $titulo;
   }

   function setAutor($autor) {
       $this->autor = $autor;
   }

   function setTotPaginas($totPaginas) {
       $this->totPaginas = $totPaginas;
   }

   function setPagAtual($pagAtual) {
       $this->pagAtual = $pagAtual;
   }

   function setAberto($aberto) {
       $this->aberto = $aberto;
   }

   function setLeitor($leitor) {
       $this->leitor = $leitor;
   }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPag() {
        if($this->getAberto(true)){
            $this->setPagAtual($this->getPagAtual() +1);
        }else{
            echo "ERRO! Impossivel avançar página<br>";
        }
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) { 
           $this->setPagAtual($p);
        
    }

    public function voltarPag() {
        if($this->getAberto(true)){
            $this->setPagAtual($this->getPagAtual() -1);
        }else{
            echo "ERRO! Impossivel voltar página<br>";
        }
    }

}
