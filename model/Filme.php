<?php

require_once("../model/Banco.php");

class Filme  extends Banco{

    private $titulo;
    private $ano;
    private $diretor;
    private $duracao;
    private $genero;

    public function setTitulo($string) {
        $this->nome = $string;
    }

    public function setAno($string) {
        $this->sobrenome = $string;
    }

    public function setDiretor($string) {
        $this->idade = $string;
    }

    public function setDuracao($string) {
        $this->cpf = $string;
    }

    public function setGenero($string) {
        $this->flag = $string;
    }

    public function getTitulo() {
        return $this->nome;
    }

    public function getAno() {
        return $this->sobrenome;
    }

    public function getDiretor() {
        return $this->idade;
    }

    public function getDuracao() {
        return $this->cpf;
    }

    public function getGenero() {
        return $this->flag;
    }

    public function incluir() {
        return $this->setFilme($this->getTitulo(), $this->getAno(), $this->getDiretor(), $this->getDuracao(), $this->getGenero());
    }
}

?>
