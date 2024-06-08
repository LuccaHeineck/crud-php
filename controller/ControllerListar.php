<?php
require_once("../model/Banco.php");
class listarController
{

    private $lista;

    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela()
    {
        $row = $this->lista->getFilme();
        foreach ($row as $value) {
            echo "<tr>";
            echo "<th>" . $value['titulo'] . "</th>";
            echo "<td>" . $value['ano'] . "</td>";
            echo "<td>" . $value['diretor'] . "</td>";
            echo "<td>" . $value['genero'] . "</td>";
            echo "<td>" . $value['duracao'] . " min</td>";
            echo "<td><a class='editar' href='editar.php?id=" . $value['titulo'] . "'>Editar</a><a class='excluir' href='../controller/ControllerDeletar.php?id=" . $value['titulo'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}
