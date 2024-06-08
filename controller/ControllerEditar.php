<?php

require_once("../model/banco.php");

class editarController {

    private $editar;
    private $titulo;
    private $ano;
    private $diretor;
    private $duracao;
    private $genero;

    public function __construct($id) {
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }

    private function criarFormulario($id) {
        $row = $this->editar->pesquisaFilme($id);
        $this->titulo = $row['titulo'] ?? ' ';
        $this->ano = $row['ano'] ?? ' ';
        $this->diretor = $row['diretor'] ?? ' ';
        $this->duracao = $row['duracao'] ?? ' ';
        $this->genero = $row['genero'] ?? ' ';
    }

    public function editarFormulario($titulo, $ano, $diretor, $duracao, $genero, $id) {
        if ($this->editar->updateFilme($titulo, $ano, $diretor, $duracao,$genero, $id) == TRUE) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function getGenero() {
        return $this->genero;
    }

}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if (isset($_POST['submit'])) {
    $editar->editarFormulario($_POST['titulo'], $_POST['ano'], $_POST['diretor'], $_POST['duracao'], $_POST['genero'], $_POST['id']);
}
