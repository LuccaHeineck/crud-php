<?php

//require_once("../init.php");

class Banco {

    protected $sqlite;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->sqlite = new SQLite3('../SQLITEDB1.db');
    }

    public function setFilme($titulo, $ano, $diretor, $duracao, $genero) {
        $stmt = $this->sqlite->prepare("INSERT INTO filme (`titulo`, `ano`, `diretor`, `duracao`,`genero`) VALUES (:titulo,:ano,:diretor,:duracao,:genero)");
       
        $stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
        $stmt->bindValue(':ano', $ano, SQLITE3_INTEGER);
        $stmt->bindValue(':diretor', $diretor, SQLITE3_TEXT);
        $stmt->bindValue(':duracao', $duracao, SQLITE3_INTEGER);
        $stmt->bindValue(':genero', $genero, SQLITE3_TEXT);

        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function getFilme() {
        $result = $this->sqlite->query("SELECT * FROM filme");
        $array = array();
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function deleteFilme($id) {
        if ($this->sqlite->query("DELETE FROM `filme` WHERE `titulo` = '" . $id . "';") == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function pesquisaFilme($id) {
        $result = $this->sqlite->query("SELECT * FROM filme WHERE titulo='$id'");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    public function updateFilme($titulo, $ano, $diretor, $duracao, $genero, $id) {
        $stmt = $this->sqlite->prepare("UPDATE `filme` SET `titulo` = :titulo, `ano`=:ano, `diretor`=:diretor, `genero`=:genero,`duracao`=:duracao  WHERE `titulo` = :id");
        $stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
        $stmt->bindValue(':ano', $ano, SQLITE3_INTEGER);
        $stmt->bindValue(':diretor', $diretor, SQLITE3_TEXT);
        $stmt->bindValue(':duracao', $duracao, SQLITE3_INTEGER);
        $stmt->bindValue(':genero', $genero, SQLITE3_TEXT);
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        if ($stmt->execute() == TRUE) {
            return true;
        } else {
            return false;
        }
    }

}

?>
